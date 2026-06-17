<?php

$posts = json_decode(file_get_contents(Path::$source.'posts.json'), true);
$postCount = count($posts);

if (!empty($posts[$postCount - 8])) { ?>
<div class="flex bg-white transition hover:shadow-xl">
    <div class="hidden sm:block sm:basis-56">
    <img src="<?= $posts[$postCount - 8]['header_image_url'] ?>" class="aspect-square h-full w-full object-cover">
    </div>

    <div class="flex flex-1 flex-col justify-between">
    <div class="border-s border-gray-900/10 p-4 sm:border-l-transparent sm:p-6">
        <a href="/blog/<?= $posts[$postCount - 8]['filename'] ?>">
        <span class="font-bold text-gray-900 uppercase">
            <?= $posts[$postCount - 8]['title'] ?>
        </span>
        </a>

        <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-700">
            <?= $posts[$postCount - 8]['description'] ?>
        </p>
    </div>

    <div class="sm:flex sm:items-end sm:justify-end">
        <a href="/blog/<?= $posts[$postCount - 8]['filename'] ?>" class="block bg-gray-900 px-5 py-3 text-center text-xs font-bold text-white uppercase transition hover:bg-gray-800">
        Read Blog
        </a>
    </div>
    </div>
</div>
<?php } ?>

<?php if (!empty($posts[$postCount - 9])) { ?>
<div class="flex bg-white transition hover:shadow-xl">
    <div class="hidden sm:block sm:basis-56">
    <img src="<?= $posts[$postCount - 9]['header_image_url'] ?>" class="aspect-square h-full w-full object-cover">
    </div>

    <div class="flex flex-1 flex-col justify-between">
    <div class="border-s border-gray-900/10 p-4 sm:border-l-transparent sm:p-6">
        <a href="/blog/<?= $posts[$postCount - 9]['filename'] ?>">
        <span class="font-bold text-gray-900 uppercase">
            <?= $posts[$postCount - 9]['title'] ?>
        </span>
        </a>

        <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-700">
            <?= $posts[$postCount - 9]['description'] ?>
        </p>
    </div>

    <div class="sm:flex sm:items-end sm:justify-end">
        <a href="/blog/<?= $posts[$postCount - 9]['filename'] ?>" class="block bg-gray-900 px-5 py-3 text-center text-xs font-bold text-white uppercase transition hover:bg-gray-800">
        Read Blog
        </a>
    </div>
    </div>
</div>
<?php } ?>
