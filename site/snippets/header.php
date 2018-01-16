<!DOCTYPE html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title><?= $page->title()->html() ?> | <?= $site->title()->html() ?></title>

    <?= css('http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700') ?>
    <?= css('assets/css/site.css') ?>

    <?php if($page->description() != ''): ?>
    <meta name="description" content="<?= $page->description()->html() ?>">
    <?php else: ?>
    <meta name="description" content="<?= $site->description()->html() ?>">
    <?php endif ?>

    <link rel="icon" href="<?= url('assets/img/favicon.png') ?>" />
    <link rel="apple-touch-icon" href="<?= url('assets/img/apple-touch-icon.png') ?>" />
    <meta name="apple-mobile-web-app-title" content="<?= $site->title()->html() ?>">
    <link rel="alternate" type="application/rss+xml" href="<?= url('feed') ?>" title="Blog Feed">
  </head>
  <body>

    <header class="site-header" role="banner">
      <a href="<?= url() ?>"><?= $site->title()->html() ?></a>
      <p><?= $site->description()->html() ?></p>
    </header>
