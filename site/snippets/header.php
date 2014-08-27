<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <title><?php echo html($page->title()) ?> | <?php echo html($site->title()) ?></title>

  <?php echo css('http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700') ?>
  <?php echo css('assets/css/site.css') ?>

  <?php if($page->description() != ''): ?>
  <meta name="description" content="<?php echo html($page->description()) ?>" />
  <?php else: ?>
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <?php endif ?>

  <link rel="icon" href="<?php echo url('assets/img/favicon.png') ?>" />
  <link rel="apple-touch-icon" href="<?php echo url('assets/img/apple-touch-icon.png') ?>" />
  <meta name="apple-mobile-web-app-title" content="<?php echo html($site->title()) ?>">
  <link rel="alternate" type="application/rss+xml" href="<?php echo url('feed') ?>" title="Blog Feed" />
</head>
<body>

  <header class="site-header" role="banner">
    <a href="<?php echo url() ?>"><?php echo html($site->title()) ?></a>
    <p><?php echo html($site->description()) ?></p>
  </header>
