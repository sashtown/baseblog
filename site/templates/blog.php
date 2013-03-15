<?php snippet('header'); ?>

    <?php snippet('menu'); ?>

	<section class="blog" role="main">
        <?php if(param('category')) {   /*** article overview ***/

            $articles = $pages->find('blog')
                            ->children()
                            ->visible()
                            ->filterBy('categories', param('category'), ',')
                            ->flip()
                            ->paginate(4);

                            echo ('<h1 class="results">Category Archives: <em>'), (param('category')), ('</em></h1>');
            } else {

            $articles = $pages->find('blog')
                            ->children()
                            ->visible()
                            ->flip()
                            ->paginate(4);
        }?>

        <?php foreach($articles as $article): ?>

        <?php if($article->template() == 'article.text'): /*** post format: TEXT ***/ ?>
        <article class="post format_text">
            <header class="post-meta">
                <h1><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h1>
                Posted on <time datetime="<?php echo $article->date('c') ?>"><?php echo $article->date('d.m.Y'); ?></time>
                <?php if ($article->categories()) { ?> in <a class="category" href="<?php echo url() ?>category:<?php echo $article->categories(); ?>"><?php echo $article->categories(); ?></a> <?php } ?>
            </header>
            <p><?php echo excerpt($article->text(), 400) ?></p>
            <a class="read_more" href="<?php echo $article->url() ?>">read more →</a>
        </article>

        <?php elseif($article->template() == 'article.link'): /*** post format: LINK ***/ ?>
        <article class="post format_link">
            <header class="post-meta">
                <h1><a href="<?php echo $article->customlink() ?>"><?php echo html($article->linktitle()) ?></a></h1>
                Posted on <time datetime="<?php echo $article->date('c') ?>"><?php echo $article->date('d.m.Y'); ?></time>
                <?php if ($article->categories()) { ?> in <a class="category" href="<?php echo url() ?>category:<?php echo $article->categories(); ?>"><?php echo $article->categories(); ?></a> <?php } ?>
            </header>
            <?php echo kirbytext($article->text()) ?>
            <a class="read_more" href="<?php echo $article->url() ?>">permalink</a>
        </article>

        <?php elseif($article->template() == 'article.video'): /*** post format: VIDEO ***/ ?>
        <article class="post format_video">
            <header class="post-meta">
                Posted on <time datetime="<?php echo $article->date('c') ?>"><?php echo $article->date('d.m.Y'); ?></time>
                <?php if ($article->categories()) { ?> in <a class="category" href="<?php echo url() ?>category:<?php echo $article->categories(); ?>"><?php echo $article->categories(); ?></a> <?php } ?>
            </header>
            <?php echo kirbytext($article->video()) ?>
            <?php echo kirbytext($article->text()) ?>
            <a class="read_more" href="<?php echo $article->url() ?>">permalink</a>
        </article>
        <?php endif ?>

        <?php endforeach ?>


		<?php if($articles->pagination()->hasPages()): /*** pagination ***/ ?>
        <nav class="pagination cf">
            <?php if($articles->pagination()->hasPrevPage()): ?>
            <a class="prev" href="<?= $articles->pagination()->prevPageURL() ?>">&lsaquo;&lsaquo; newer posts</a>
            <?php endif ?>
            <?php if($articles->pagination()->hasNextPage()): ?>
            <a class="next" href="<?= $articles->pagination()->nextPageURL() ?>">older posts &rsaquo;&rsaquo;</a>
            <?php endif ?>
        </nav>
        <?php endif ?>

    </section><!-- .blog -->

<?php snippet('footer') ?>
