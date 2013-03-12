<?php
/* 
Header Snippet for the Baseblog Kirby Theme 
*******************************************/
?>
<!DOCTYPE html>
<!--[if lte IE 8]><html class="ie"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> 
<html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title><?php echo html($page->title()) ?> | <?php echo html($site->title()) ?></title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
    <?php echo css('assets/styles/styles.css') ?>

    <?php if($page->description() != ''): ?>
    <meta name="description" content="<?php echo html($page->description()) ?>" />
    <?php else: ?>
    <meta name="description" content="<?php echo html($site->description()) ?>" />
    <?php endif ?>

    <meta name="apple-mobile-web-app-title" content="<?php echo html($site->title()) ?>">
    <link rel="shortcut icon" href="<?php echo url('assets/images/favicon.png') ?>" type="image/png" />
    <link rel="apple-touch-icon" href="<?php echo url('assets/images/apple-touch-icon-precomposed.png') ?>" />
    <link rel="alternate" type="application/rss+xml" href="<?php echo url('feed') ?>" title="Blog Feed" />

    <!--[if lt IE 9]><script src="<?php echo url('assets/js/html5shiv.js') ?>"></script><![endif]-->
</head>

<body>

    <div class="site">

        <header id="top" class="branding" role="banner">
            <hgroup>
                <h1><a href="<?php echo url() ?>"><?php echo html($site->title()) ?></a></h1>
                <h2><?php echo html($site->description()) ?></h2>
            <hgroup> 
        </header>
        