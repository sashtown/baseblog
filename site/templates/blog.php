<?php snippet('header'); ?>

    <?php snippet('menu'); ?>
		
	<section class="blog">

        <?php if(param('category')) {   /*** article overview ***/

            $articles = $pages->find('blog')
                            ->children()
                            ->visible()
                            ->filterBy('categories', param('category'), ',')
                            ->flip()
                            ->paginate(3);

                            echo ('<h1 class="category_overview">Category Archives: <em>'), (param('category')), ('</em></h1>');
            } else {                 

            $articles = $pages->find('blog')
                            ->children()
                            ->visible()
                            ->flip()
                            ->paginate(3);  
        }?>

        <? foreach($articles as $article): ?>

        <article>
            <?php if($article->template() == 'article.text'): /*** postformat: TEXT ***/ ?>
            <header class="post-meta">
                <h1><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h1>
                Posted on <time datetime="<?php echo $article->date('c') ?>"><?php echo $article->date('d.m.Y'); ?></time> in 
                <a class="category" href="<?php echo url() ?>blog/category:<?php echo $article->categories(); ?>"><?php echo $article->categories(); ?></a>
            </header>
            <p><?php echo excerpt($article->text(), 400) ?></p>
            <a class="read_more" href="<?php echo $article->url() ?>">read more →</a>
            
            <?php elseif($article->template() == 'article.link'): /*** postformat: LINK ***/ ?>
            <header class="post-meta format_link">
                <h1><a href="<?php echo $article->customlink() ?>"><?php echo html($article->linktitle()) ?></a></h1>
				Posted on <time datetime="<?php echo $article->date('c') ?>"><?php echo $article->date('d.m.Y'); ?></time> in
				<a class="category" href="<?php echo url() ?>category:<?php echo $article->categories(); ?>"><?php echo $article->categories(); ?></a>            </header>
            <?php echo kirbytext($article->text()) ?>
            <a class="read_more" href="<?php echo $article->url() ?>">permalink →</a>
            <?php endif ?>            
        </article>

        <?php endforeach ?>

                   
		<? if($articles->pagination()->hasPages()): /*** pagination ***/ ?>
        <nav class="pagination">
        
            <? if($articles->pagination()->hasPrevPage()): ?>
            <a class="prev" href="<?= $articles->pagination()->prevPageURL() ?>">newer posts &lsaquo;&lsaquo;</a>
            <? endif ?>
            <? if($articles->pagination()->hasNextPage()): ?>
            <a class="next" href="<?= $articles->pagination()->nextPageURL() ?>">&lsaquo;&lsaquo; older posts</a>
            <? endif ?>
        
        </nav>
        <? endif ?>                           
    </section>
        
<?php snippet('footer') ?>