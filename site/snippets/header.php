<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/reveal.css') ?>
  <?php echo css('assets/css/theme/white.css') ?>
  <?php echo css('assets/css/main.css') ?>

  <!-- Printing and PDF exports -->
  <script>
    var link = document.createElement( 'link' );
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = window.location.search.match( /print-pdf/gi ) ? 'assets/css/print/pdf.css' : 'assets/css/print/paper.css';
    document.getElementsByTagName( 'head' )[0].appendChild( link );
  </script>


</head>
<body>
<a href="http://rhizome-strategies.com" target="_blank">
  <img src="assets/images/carre_rhizome_32px.png" id="logo_img">
</a>
