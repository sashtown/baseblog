<?php snippet('header'); ?>

    <?php snippet('menu'); ?>
           
    <section class="blog" role="main">

        <article class="post format_link">
        	<header class="post-meta">
                <h1><a href="<?php echo $page->customlink() ?>"><?php echo html($page->linktitle()) ?></a></h1>
                Posted on <time datetime="<?php echo $page->date('c') ?>"><?php echo $page->date(c::get('blog.article.dateformat')); ?></time>
                <?php if ($page->categories() != ''): ?> in
                <ul class="category">
                    <?php foreach(str::split($page->categories()) as $category): ?>
                    <li><a href="<?php echo url('category:' . urlencode($category)) ?>"><?php echo $category; ?></a></li>
                    <?php endforeach ?>
                </ul>
                <?php endif ?>
            </header>
            <div class="content">
				<?php echo kirbytext($page->text()) ?>
            </div>
            <footer class="post-sub cf">
                <!-- Back to article overview -->
    			<a href="<?php echo url() ?>">← Back</a>
                <!-- Static Twitter Button -->
                <a href="https://twitter.com/intent/tweet?source=webclient&text=<?php echo rawurlencode($page->title()); ?>%20<?php echo rawurlencode($site->title()) ?>%20<?php echo rawurlencode ($page->url()); ?>%20<?php echo ('via @your_twitter_account')?>" target="blank" title="Tweet this">Tweet</a>
            </footer>
        </article>
    
    </section>

<?php snippet('footer') ?>
