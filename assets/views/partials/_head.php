<!DOCTYPE html>
<html>
  <head>
    <title><?= $title ?></title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <!-- Mobile Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

    <!-- Windows phone tab color -->
    <meta name="msapplication-navbutton-color" content="#009688">
    <!-- Chrome for Android tab color -->
    <meta name="theme-color" content="#009688">
    <!-- Apple Safari icon -->
    <link rel="apple-touch-icon" href="/assets/img/icons/apple-touch-icon.png">
    <!-- Safari 9 Pinned tabs in El Capitan (Slightly broken svg!) -->
    <link rel="mask-icon" href="/assets/img/icons/safariPinnedTab.svg" color="#009688">

    <!-- SEO -->
    <?php if (isset($SEOdescription)) {echo "<meta name=\"description\" content=\"" . $SEOdescription . "\">\r\n";} ?>
    <?php if (isset($SEOkeywords)) {echo "<meta name=\"keywords\" content=\"" . $SEOkeywords . "\">\r\n";} ?>

    <!-- Twitter Card -->
    <meta name="twitter:card"        content="Summary" />
    <meta name="twitter:site"        content="@TwitterHandle" />
    <meta name="twitter:title"       content="Title" />
    <meta name="twitter:description" content="200 char description" />
    <meta name="twitter:image"       content="Image" />

    <!-- Facebook Open Graph -->
    <meta property="og:url"         content="http://www.example.com/" />
    <meta property="og:type"        content="website" />
    <meta property="og:title"       content="13 amazing facts about metatags" />
    <meta property="og:description" content="8 reasons metatags will change the way you think about everything" />
    <meta property="og:image"       content="1200x627 > 5mb image url" />

    <!-- Pinterest Image Ownership -->
    <meta name="p:domain_verify" content="key goes here"/>

    <!-- TODO Figure out a way to automatically compile on http request -->
    <link rel="stylesheet" href="/assets/css/styles.min.css"/>
    <link rel="stylesheet" href="/assets/css/<?= $css ?>.css" />

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='https://www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','__UA-XXXXX-X__','auto');ga('send','pageview');
    </script>

    <!-- Multilingual - Uncomment supported languages -->
    <link rel="alternate" href="/" hreflang="en-us" />
    <!-- <link rel="alternate" href="/es/" hreflang="es" /> -->
  </head>
  <body>
