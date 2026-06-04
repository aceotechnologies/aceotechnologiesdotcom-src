<?php

$posts = json_decode(file_get_contents(Path::$source.'posts.json'), true);
$post = $posts[count($posts) - 1];

?>


<img src="<?= $post['header_image_url'] ?>" width="100%" height="auto" class="w-full h-full object-cover object-center" alt="">
