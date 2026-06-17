<?php

$posts = json_decode(file_get_contents(Path::$source.'posts.json'), true);
$postCount = count($posts);

?>

<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="grid gap-5 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
    
  <?php if (!empty($posts[$postCount - 5])) { ?>
    <div class="overflow-hidden transition-shadow duration-300 bg-white rounded">
      <a href="/blog/<?= $posts[$postCount - 5]['filename'] ?>" aria-label="Article"><img src="<?= $posts[$postCount - 5]['header_image_url'] ?>" class="object-cover w-full h-64 rounded" alt="" /></a>
      <div class="py-5">
        <a href="/blog/<?= $posts[$postCount - 5]['filename'] ?>" aria-label="Article" class="inline-block mb-3 text-black transition-colors duration-200 hover:text-deep-purple-accent-700"><p class="text-2xl font-bold leading-5"><?= $posts[$postCount - 5]['title'] ?></p></a>
        <p class="mb-4 text-gray-700">
          <?= $posts[$postCount - 5]['description'] ?>
        </p>
      </div>
    </div>
  <?php } ?>

  <?php if (!empty($posts[$postCount - 6])) { ?>
    <div class="overflow-hidden transition-shadow duration-300 bg-white rounded">
      <a href="/blog/<?= $posts[$postCount - 6]['filename'] ?>" aria-label="Article"><img src="<?= $posts[$postCount - 6]['header_image_url'] ?>" class="object-cover w-full h-64 rounded" alt="" /></a>
      <div class="py-5">
        <a href="/blog/<?= $posts[$postCount - 6]['filename'] ?>" aria-label="Article" class="inline-block mb-3 text-black transition-colors duration-200 hover:text-deep-purple-accent-700"><p class="text-2xl font-bold leading-5"><?= $posts[$postCount - 6]['title'] ?></p></a>
        <p class="mb-4 text-gray-700">
          <?= $posts[$postCount - 6]['description'] ?>
        </p>
      </div>
    </div>
  <?php } ?>

  <?php if (!empty($posts[$postCount - 7])) { ?>
    <div class="overflow-hidden transition-shadow duration-300 bg-white rounded">
      <a href="/blog/<?= $posts[$postCount - 7]['filename'] ?>" aria-label="Article"><img src="<?= $posts[$postCount - 7]['header_image_url'] ?>" class="object-cover w-full h-64 rounded" alt="" /></a>
      <div class="py-5">
        <a href="/blog/<?= $posts[$postCount - 7]['filename'] ?>" aria-label="Article" class="inline-block mb-3 text-black transition-colors duration-200 hover:text-deep-purple-accent-700"><p class="text-2xl font-bold leading-5"><?= $posts[$postCount - 7]['title'] ?></p></a>
        <p class="mb-4 text-gray-700">
          <?= $posts[$postCount - 7]['description'] ?>
        </p>
      </div>
    </div>
  <?php } ?>

  </div>
</div>
