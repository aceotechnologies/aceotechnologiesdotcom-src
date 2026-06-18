<!DOCTYPE html>
<html lang="en">
<head>

<?php require 'head-single.php'; ?>

</head>

<?php include 'google-tag.html'; ?>

<body>

<div id="top">
  <?php require 'nav.php'; ?>
</div>

<div class="max-w-screen-xl mx-auto">
    
    <main class="mt-10">

      <?php require 'header-single.php'; ?>

      <div class="flex flex-col lg:flex-row lg:space-x-12 gap-4">

        <!-- Left Sidebar -->
        <div class="order-2 lg:order-1 w-full lg:w-1/4 m-auto mt-12 lg:mt-12 max-w-screen-sm">

          <?php require 'left-sidebar.html'; ?>

        </div>

        <!-- Main Article -->
        <article class="order-1 lg:order-2 px-4 lg:px-0 mt-12 text-gray-700 text-lg leading-relaxed w-full lg:w-3/4">
          
            <?= $article ?? 'No article'; ?>

        </article>

        <!-- Right Sidebar -->
        <div class="order-3 lg:order-3 w-full lg:w-1/4 m-auto mt-12 lg:mt-12 max-w-screen-sm">

          <?php require 'right-sidebar.html'; ?>

        </div>

      </div>

<?php
  $morePosts      = json_decode(file_get_contents(Path::$source.'posts.json'), true);
  $morePostsCount = count($morePosts);
  $post1          = rand(1, $morePostsCount);
  $post2          = rand(1, $morePostsCount);
  $post3          = rand(1, $morePostsCount);
  $moreAuthor     = 'Code Kazeem';
  $moreProfilePic = '/images/blog/profile.jpg';
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

  <!-- Back to top -->
  <a href="#top">
  <div class="blog-to-top">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
    </svg>
  </div>
  </a>

  <script type="module" src="/src/main.js"></script>
</body>
</html>
