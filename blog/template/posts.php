<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="author" content="Code Kazeem">
    <meta name="description" content="Code Kazeem's musings">

    <meta property="og:title" content="Code Kazeem's Blog">
    <meta property="og:url" content="https://aceotechnologies.com/codekzm">
    <meta property="og:image" content="https://aceotechnologies.com/codekzm/images/profile.jpg">
    <meta property="og:image:width" content="512">
    <meta property="og:image:height" content="512">
    <meta property="og:type" content="blog">
    <meta property="og:description" content="Code Kazeem's musings">

    <link rel="stylesheet" href="/src/input.css">

    <title>Code Kazeem's Blog</title>

<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '533945439740780');
fbq('track', 'PageView');
</script>
<noscript></noscript>
<!-- End Meta Pixel Code -->
</head>

<?php include 'google-tag.html'; ?>

<body>

<?php require 'nav.php'; ?>    

<div class="blog-jumbotron-index">

    <?php require_once 'jumbotron-posts.php'; ?>

</div>

<div class="max-w-screen-lg mx-auto">


    
    <main class="mt-10">

        <!-- Header -->
      <?php require_once 'header-posts.php'; ?>

      <div class="flex flex-col lg:flex-row lg:space-x-12">
        <!-- Header blog list -->
        <?php require_once 'list-posts.php'; ?>
      </div>

      
      <div class="flex flex-col lg:flex-row lg:space-x-12">
        <!-- List contd -->
        <div class="grid gap-5 lg:grid-cols-2  sm:max-w-sm sm:mx-auto lg:max-w-full">
            <?php require_once 'list-posts-2.php'; ?>
        </div>
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
