<?php $url = str_replace('.php', '.html', "https://aceotechnologies.com/codekzm/".$_SERVER['PHP_SELF']); ?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="author" content="Code Kazeem">
<meta name="description" content="<?= $description ?>">

<meta property="og:title" content="<?= $title ?? 'CodeKZM Blog' ?>">
<meta property="og:url" content="<?= $url ?>">
<meta property="og:image" content="<?= $headerImage ?>">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:type" content="article">
<meta property="og:description" content="<?= $description ?>">

<link rel="stylesheet" href="/src/input.css">
<title><?= $title ?? 'CodeKZM Blog' ?></title>
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