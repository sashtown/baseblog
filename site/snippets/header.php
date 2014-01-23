<?php
/*
Header Snippet for the Baseblog Kirby Theme
*******************************************/
?>
<!DOCTYPE html>
<!--[if lte IE 8]><html class="ie"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en" prefix="og: http://ogp.me/ns#"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo html($page->title()) ?> | <?php echo html($site->title()) ?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
<?php if($page->description() != ''): ?>
    <!-- Summary Card twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@nytimes">
    <meta name="twitter:creator" content="@SarahMaslinNir">
    <meta name="twitter:title" content="<?php echo html($page->title()) ?> | <?php echo html($site->title()) ?>">
    <meta name="twitter:description" content="<?php echo html($page->title()) ?> | <?php echo html($page->description()) ?>">
    <meta name="twitter:image" content="logo.png">
    <!-- open graph -->
    <meta property="og:title" content="<?php echo html($page->title()) ?> | <?php echo html($site->title()) ?>">
    <meta property="og:type" content="website"> 
    <meta property="og:url" content="<?php echo $page->tinyurl() ?>">
    <meta property="og:image" content="logo.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:description" content="<?php echo html($page->title()) ?> | <?php echo html($page->description()) ?>">    
    <meta name="description" content="<?php echo html($page->description()) ?>" />
<?php else: ?>
    <meta property="og:description" content="<?php echo html($site->description()) ?>">
    <meta name="description" content="<?php echo html($site->description()) ?>" />    
<?php endif ?>
    

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,600,700' rel='stylesheet' type='text/css'>
    <?php echo css('assets/styles/styles.css') ?>

    <meta name="apple-mobile-web-app-title" content="<?php echo html($site->title()) ?>">
    <link rel="icon" href="<?php echo url('assets/images/favicon.png') ?>" />
    <link rel="apple-touch-icon" href="<?php echo url('assets/images/apple-touch-icon.png') ?>" />
    <link rel="alternate" type="application/rss+xml" href="<?php echo url('feed') ?>" title="<?php echo html($site->title()) ?>" />

    <!--[if lt IE 9]><script src="<?php echo url('assets/js/html5shiv.js') ?>"></script><![endif]-->
</head>

<body>

    <div class="site">

        <header id="top" class="branding" role="banner">
            <a href="<?php echo url() ?>"><h1><?php echo html($site->title()) ?></h1></a>
            <p><?php echo html($site->description()) ?></p>
        </header>
