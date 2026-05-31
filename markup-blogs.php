<?php

require_once 'ParseDown/Parsedown.php';
require_once 'ParseDown/ParsedownExtra.php';

/**
 * Holds the values for the different directory paths
 */
class Path
{
    public static string $source      = 'blog/';            # source folder
    public static string $destination = 'codekzm/';         # destination folder
    public static string $template    = 'blog/template/';   # template folder
}

/**
 * Handles the raw markdown text file and compilation
 */
class Text
{
    private static $instance                = null;
    public ?string $text                    = null;
    public ?string $title                   = null;
    public ?string $headerImage             = null;
    public ?string $article                 = null;
    public ?string $implodedText            = null;
    public ?array $explodedText             = null;
    public ?string $createdAt               = null;
    public ?string $updatedAt               = null;

    private function __construct(){}
    private function __clone(){}

    public static function getInstance()
    {
        if (static::$instance === null) {
            static::$instance = new Text;
        }

        return static::$instance;
    }

    /**
     * @method - Compiles the data from raw md file into chunks of usable data
     * @param filename - the path to the raw md file
     */
    public function compile($filename)
    {
        $this->setText($filename);
        $this->explodeText();
        $this->filterTitle();
        $this->filterHeaderImage();
        $this->setDateCreated($filename);
        $this->setDateUpdated($filename);
        $this->filterArticle();
    }

    /**
     * @method - Gets the title from array and strips it of markdown syntax if any
     */
    public function filterTitle()
    {
        $this->title = trim($this->explodedText[1], '# ');
    }

    /**
     * @method - Gets the header image link from array
     */
    public function filterHeaderImage()
    {
        $this->headerImage = $this->explodedText[0];
    }

    /**
     * @method - Gets the article from array
     */
    public function filterArticle()
    {
        array_shift($this->explodedText);       # Removes image link at the top
        array_shift($this->explodedText);       # Removes title second to top
        $this->implodeText();                   # Turns array to string
        $this->article = $this->implodedText;
    }

    /**
     * @method - Converts the arrayed text back into string format
     */
    public function implodeText()
    {
        $this->implodedText = implode("\n\n", $this->explodedText);
    }

    /**
     * @method - Converts string text to array format
     */
    public function explodeText()
    {
        $this->text = str_replace("\r\n\r\n", "\n\n", $this->text);
        $this->explodedText = explode("\n\n", $this->text);
    }

    /**
     * @method - Sets the createdAt attribute with the value of the 
     * raw markdown file creation time
     * @param filename - path to the raw markdown file
     */
    public function setDateCreated(string $filename)
    {
        $this->createdAt = filectime($filename);
    }

    /**
     * @method - Sets the updatedAt attribute with the value of the 
     * raw markdown file modification time
     * @param filename - path to the raw markdown file
     */
    public function setDateUpdated(string $filename)
    {
        $this->updatedAt = filemtime($filename);
    }

    /**
     * @method - Sets the text attribute with the value of the
     * contents of the markdown file
     * @param filename - path to the markdown file
     */
    public function setText(string $filename)
    {
        $this->text = file_get_contents($filename);
    }

    /**
     * @method Unsets all variables. Runs on destruct.
     */
    public function cleanUp()
    {
        $this->text = null;
        $this->title = null;
        $this->implodedText = null;
        $this->explodedText = null;
        $this->image = null;
        $this->createdAt = null;
        $this->updatedAt = null;
    }

    public function __destruct()
    {
        // $this->cleanUp();
    }
}

/**
 * Handles the markup functions with data gotten from the Text class
 */
class MarkupBlogs
{
    public ?string $filePath;
    public ?string $lastMarkupTime;
    public ?string $lastMarkupAllTime;
    public ?Text $text;
    public ?ParsedownExtra $extra;

    public function __construct()
    {
        $this->initLastMarkUpTimes();
    }

    /**
     * @method Marks up all valid files.
     * Usually runs when there are universal changes.
     */
    public function markupAll()
    {
        $blog = $this->scanBlog();

        foreach ($blog as $blogPost) {
            $this->markup($blogPost);
        }

        $this->setLastMarkupAllTime();
    }

    /**
     * @method Marks up single files usually where there are changes.
     */
    public function markupSingle()
    {
        $blog = $this->scanBlog();
        
        foreach ($blog as $blogPost) {
            if (filemtime(Path::$source.$blogPost) >= $this->lastMarkupTime) {  # If there are changes
                $this->markup($blogPost);
                $this->setLastMarkupTime();
            }
        }
    }

    /**
     * @method Handles the markup functionality
     */
    public function markup($blogPost)
    {
        $this->text = Text::getInstance();
        $this->text->compile(Path::$source.$blogPost);

        $title = $this->text->title;
        $headerImage = $this->text->headerImage;
        $createdAt = $this->text->createdAt;
        $updatedAt = $this->text->updatedAt;
        
        $this->extra = new ParsedownExtra();
        $article = $this->extra->text($this->text->article);

        ob_start();
        require Path::$template.'single.php';          # Template for single posts
        $data = ob_get_clean();

        $this->saveMarkup($blogPost, $data);
    }

    /**
     * @method Stores final (HTML) data in /codekzm directory
     * @param filename - filename for the destination file
     * @param data - data to be stored in file
     */
    public function saveMarkup($filename, $data)
    {
        $filename = pathinfo($filename, PATHINFO_FILENAME);
        file_put_contents(Path::$destination.$filename.'.html', $data);
    }

    /**
     * @method Initialize the lastMarkupTime and lastMarkupAllTime
     * with values gotten respectively from the last creation 
     * and last modified times of lmt and lmat files respectively
     */
    public function initLastMarkUpTimes()
    {
        $this->lastMarkupTime = filemtime(Path::$source.'lmt');
        $this->lastMarkupAllTime = filemtime(Path::$source.'lmat');
    }

    /**
     * @method Sets last modified time of the lmt file
     */
    public function setLastMarkupTime()
    {
        touch(Path::$source.'lmt');
    }

    /**
     * @method Sets last modified time of the lmat file
     */
    public function setLastMarkupAllTime()
    {
        touch(Path::$source.'lmat');
    }

    /**
     * @method Checks if conditions necessary for total markup is met.
     * 1. If there are changes to the template files.
     * @return boolean
     */
    public function needsTotalMarkup()
    {
        $templates = $this->scanBlog(true);

        foreach ($templates as $template) {
            if (filemtime(Path::$template.$template) > $this->lastMarkupAllTime) {
                return true;
            }
        }

        return false;
    }

    /**
     * @method Returns all the valid files in the /blog directory
     * @param template - scans the template directory if true, otherwise scans the blog directory
     */
    public function scanBlog(bool $template = false)
    {
        $files = $template === false
            ? scandir(Path::$source)
            : scandir(Path::$template);

        $newFiles = [];

        foreach ($files as $file) {
            $exceptions = [
                '.', '..', 'template', 'lmt', 'lmat', 'index.php'
            ];

            if (in_array($file, $exceptions)) {
                continue;
            }

            $newFiles[] = $file;
        }

        return $newFiles;
    }

    /**
     * @method Handles markup for different scenarios.
     * If blog needs total markup, or single markup.
     */
    public function run()
    {
        if ($this->needsTotalMarkup() === true) {
            $this->markupAll();
        } else {
            $this->markupSingle();
        }
    }
}

$blog = new MarkupBlogs();
$blog->run();
