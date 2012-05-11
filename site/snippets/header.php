<?php
/* 
Header Snippet for the Baseblog Kirby Theme 
*******************************************/
?>
<!DOCTYPE html>
<!--[if lte IE 8]><html class="ie"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> 
<html lang="de"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title><?php echo html($page->title()) ?> | <?php echo html($site->title()) ?></title>
    
    <?php if($page->description() != ''): ?>
<meta name="description" content="<?php echo html($page->description()) ?>" />
    <?php else: ?>
<meta name="description" content="<?php echo html($site->description()) ?>" />
    <?php endif ?>
    
    <meta name="robots" content="index, follow" />
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="<?php echo url('assets/images/favicon.jpg') ?>" type="image/png" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <link rel="alternate" type="application/rss+xml" href="<?php echo url('feed') ?>" title="Blog Feed" />

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    
    <?php echo css('assets/styles/styles.css') ?>

</head>

<body>

    <div id="site">

        <header id="branding">
            <hgroup>
                <a href="<?php echo url() ?>"><h1><?php echo html($site->title()) ?></h1></a>
                <h2><?php echo html($site->description()) ?></h2>
            <hgroup> 
        </header>