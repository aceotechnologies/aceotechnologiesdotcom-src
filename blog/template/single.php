<!DOCTYPE html>
<html lang="en">
<head>

<?php require 'head-single.php'; ?>

</head>

<?php include 'google-tag.html'; ?>

<body>

<?php require 'nav.php'; ?>

<div class="max-w-screen-lg mx-auto">
    
    <main class="mt-10">

      <?php require 'header-single.php'; ?>

      <div class="flex flex-col lg:flex-row lg:space-x-12">

        <article class="px-4 lg:px-0 mt-12 text-gray-700 text-lg leading-relaxed w-full lg:w-3/4">
          
            <?= $article ?? 'No article'; ?>

        </article>

        <div class="w-full lg:w-1/4 m-auto mt-12 max-w-screen-sm">

          <?php require 'author.html'; ?>

        </div>

      </div>

<?php
  $morePosts = json_decode(file_get_contents(Path::$source.'posts.json'), true);
  $morePostsCount = count($morePosts);
  $post1 = rand(1, $morePostsCount);
  $post2 = rand(1, $morePostsCount);
  $post3 = rand(1, $morePostsCount);
  $moreAuthor = 'Code Kazeem';
  $moreProfilePic = '/images/codekzm/profile.jpg';
?>

      <div id="more_articles">
        <?php require 'more-articles-single.php'; ?>
      </div>
    </main>
    <!-- main ends here -->

    <!-- footer -->
    <footer class="border-t mt-12 pt-12 pb-32 px-4 lg:px-0">
      
    <?php require 'footer.html'; ?>

    </footer>
  </div>

  <script type="module" src="/src/main.js"></script>
</body>
</html>
