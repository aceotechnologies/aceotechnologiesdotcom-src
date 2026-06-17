<?php

$posts = json_decode(file_get_contents(Path::$source.'posts.json'), true);
$postCount = count($posts);

if (!empty($posts[$postCount - 1])) {
    $bigTitleArray = explode(' ', $posts[$postCount - 1]['title']);
    $x = 0;
    $bigTitle = '';
    foreach ($bigTitleArray as $word) {
        if ($x === 2) $bigTitle .= '<br><em class="font-normal">';

        $bigTitle .= "$word ";
        $x++;
}

?>

<div class="mx-auto max-w-4xl px-6">
    <div class="mb-10 border-b-2 border-black pb-6">
        <div class="mb-3 flex items-center gap-3">
            <span class="bg-black px-2 py-0.5 font-sans text-[11px] font-bold tracking-[0.2em] text-white uppercase">Blog</span>
            <span class="font-sans text-[11px] tracking-widest text-neutral-500 uppercase"><script>document.write(new Date().getFullYear())</script></span>
        </div>
        <!-- <h1 class="text-[clamp(2.4rem,6vw,4rem)] leading-[1.05] font-bold tracking-tight text-black">The Architecture<br><em class="font-normal">of the Printed Word</em></h1> -->
        <h1 class="text-[clamp(2.4rem,6vw,4rem)] leading-[1.05] font-bold tracking-tight text-black"><?= $bigTitle ?></em></h1>
        <div class="mt-4 flex items-center gap-4 font-sans">
            <span class="text-sm text-neutral-600">By Code Kazeem</span>
            <!-- <span class="text-neutral-300">|</span>
            <span class="text-sm text-neutral-500">March 31, 2026</span>
            <span class="text-neutral-300">|</span>
            <span class="text-sm text-neutral-500">8 min read</span> -->
        </div>
    </div>
    <div class="pointer-events-none relative mb-[-2.5rem] overflow-hidden select-none">
        <span class="block font-sans text-[clamp(4.25rem,15.3vw,9.35rem)] uppercase leading-none font-black tracking-tighter text-black/[0.04]" aria-hidden="true">CodeKazeem</span>
    </div>
    <div class="relative mt-[-2.5rem] top-[-2.5rem]">
        <!-- <div class="absolute top-0 right-0" style="width: 286px;">
            <svg width="286" height="286" viewBox="-4.8 -4.8 57.60 57.60" xmlns="http://www.w3.org/2000/svg" transform="matrix(-1, 0, 0, 1, 0, 0)" aria-hidden="true"><g fill="#1a1a1a" opacity="0.82"><path d="M17 46a14.211 14.211 0 0 1-1.952-7.453H20.6a3.086 3.086 0 0 0 3.055-2.65l.65-4.552 4.108-1.645a1.028 1.028 0 0 0 .538-1.415l-3.615-7.23c0-6.454-1.077-10.884-4.506-13.289 0 0-.638 5.058-6.811 9.173A13.292 13.292 0 0 0 7.846 27.23C.387 21.057-.385 12.826 2.7 7.682S11.19.823 17.106 1.337c7.559.658 12.419 8 13.632 18.005C33 38 45 34 45 34s-2 16-28 12z" opacity="0.18"></path><path d="M18.681 19.924l3.848 1.924a4.165 4.165 0 0 0 0-3.848z"></path><path d="M17 46a14.211 14.211 0 0 1-1.952-7.453H20.6a3.086 3.086 0 0 0 3.055-2.65l.65-4.552 4.108-1.645a1.028 1.028 0 0 0 .538-1.415l-3.615-7.23c0-6.454-1.077-10.884-4.506-13.289 0 0-.638 5.058-6.811 9.173A13.292 13.292 0 0 0 7.846 27.23C.387 21.057-.385 12.826 2.7 7.682S11.19.823 17.106 1.337c7.559.658 12.419 8 13.632 18.005C33 38 45 34 45 34s-2 16-28 12z" fill="none" stroke="#1a1a1a" stroke-linecap="square" stroke-miterlimit="10" stroke-width="0.72"></path><circle cx="41" cy="17" r="1"></circle><path d="M38.719 8.328A9.51 9.51 0 0 1 37 6a9.5 9.5 0 0 1-4 4 9.5 9.5 0 0 1 4 4 9.5 9.5 0 0 1 4-4 9.509 9.509 0 0 1-2.281-1.672z"></path><path d="M32.485 26.672c3 2 6.1 1.828 10.1-.172a6.213 6.213 0 0 1-2.166 5.208" fill="none" stroke="#1a1a1a" stroke-miterlimit="10" stroke-width="0.72"></path></g></svg>
        </div> -->
        <p class="mb-4 text-base text-black md:text-lg">
            <?= $posts[$postCount - 1]['description'] ?>
        </p>
    </div>
    <!-- <div class="relative" style="height:auto;min-height:200px"></div> -->
</div>
<div class="mt-10 border-t border-neutral-300 pt-4 font-sans">
    <a href="/blog/<?= $posts[$postCount - 1]['filename'] ?>" class="text-[11px] tracking-widest text-neutral-400 uppercase">Continue reading →</a>
</div>
<hr class="w-full h-1 bg-black mt-6">
<?php } ?>


<!--  -->


<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="grid gap-10 row-gap-8 lg:grid-cols-5">
      <?php if (!empty($posts[$postCount - 2])) { ?>
    <div class="lg:col-span-2">
      <!-- <p class="mb-2 text-xs font-semibold tracking-wide text-gray-600 uppercase">
        20 Nov 2020
      </p> -->
      <div class="mb-3">
        <a href="/blog/<?= $posts[$postCount - 2]['filename'] ?>" aria-label="Article" class="inline-block text-black transition-colors duration-200 hover:text-deep-purple-accent-400">
          <p class="font-sans text-xl font-extrabold leading-none tracking-tight lg:text-4xl xl:text-5xl">
            <?= $posts[$postCount - 2]['title'] ?>
          </p>
        </a>
      </div>
      <p class="mb-4 text-base text-gray-700 md:text-lg">
      <?= $posts[$postCount - 2]['description'] ?>
      </p>
      <div class="flex items-center">
        <a href="/images/blog/profile.jpg" aria-label="Author" class="mr-3">
          <img alt="avatar" src="/images/blog/profile.jpg" class="object-cover w-10 h-10 rounded-full shadow-sm" />
        </a>
        <div>
          <a href="/images/blog/profile.jpg" aria-label="Author" class="font-semibold text-gray-800 transition-colors duration-200 hover:text-deep-purple-accent-400">Code Kazeem</a>
          <p class="text-sm font-medium leading-4 text-gray-600">Author</p>
        </div>
      </div>
    </div>
      <?php } ?>

    <div class="flex flex-col space-y-8 lg:col-span-3">
        <?php if (!empty($posts[$postCount - 3])) { ?>
      <div>
        <!-- <p class="mb-2 text-xs font-semibold tracking-wide text-gray-600 uppercase">
          14 Jul 2020
        </p> -->
        <div class="mb-3">
          <a href="/blog/<?= $posts[$postCount - 3]['filename'] ?>" aria-label="Article" class="inline-block text-black transition-colors duration-200 hover:text-deep-purple-accent-400">
            <p class="font-sans text-xl font-extrabold leading-none tracking-tight lg:text-2xl">
                <?= $posts[$postCount - 3]['title'] ?>
            </p>
          </a>
        </div>
        <p class="mb-4 text-base text-gray-700 md:text-lg">
          <?= $posts[$postCount - 3]['description'] ?>
        </p>
        <div class="flex items-center">
          <a href="/images/blog/profile.jpg" aria-label="Author" class="mr-3">
            <img alt="avatar" src="/images/blog/profile.jpg" class="object-cover w-10 h-10 rounded-full shadow-sm" />
          </a>
          <div>
            <a href="/images/blog/profile.jpg" aria-label="Author" class="font-semibold text-gray-800 transition-colors duration-200 hover:text-deep-purple-accent-400">Code Kazeem</a>
            <p class="text-sm font-medium leading-4 text-gray-600">Author</p>
          </div>
        </div>
      </div>
        <?php } ?>

        <?php if (!empty($posts[$postCount - 4])) { ?>
      <div>
        <!-- <p class="mb-2 text-xs font-semibold tracking-wide text-gray-600 uppercase">
          18 Mar 2020
        </p> -->
        <div class="mb-3">
          <a href="/blog/<?= $posts[$postCount - 4]['filename'] ?>" aria-label="Article" class="inline-block text-black transition-colors duration-200 hover:text-deep-purple-accent-400">
            <p class="font-sans text-xl font-extrabold leading-none tracking-tight lg:text-2xl">
              <?= $posts[$postCount - 4]['title'] ?>
            </p>
          </a>
        </div>
        <p class="mb-4 text-base text-gray-700 md:text-lg">
          <?= $posts[$postCount - 4]['description'] ?>
        </p>
        <div class="flex items-center">
          <a href="/images/blog/profile.jpg" aria-label="Author" class="mr-3">
            <img alt="avatar" src="/images/blog/profile.jpg" class="object-cover w-10 h-10 rounded-full shadow-sm" />
          </a>
          <div>
            <a href="/images/blog/profile.jpg" aria-label="Author" class="font-semibold text-gray-800 transition-colors duration-200 hover:text-deep-purple-accent-400">Code Kazeem</a>
            <p class="text-sm font-medium leading-4 text-gray-600">Author</p>
          </div>
        </div>
      </div>
        <?php } ?>

    </div>
  </div>
</div>