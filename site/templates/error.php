<?php snippet('header'); ?>

    <?php snippet('menu'); ?>

    <section class="page" role="main">

        <article>
            <h1><?php echo html($page->title()) ?></h1>
            <div class="content"><?php echo kirbytext($page->text()) ?></div>
        </article>

	</section>

<?php snippet('footer') ?>