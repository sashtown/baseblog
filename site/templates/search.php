<?php
    $search = new search(array(
    'searchfield' => 'q',
    'mode' => 'and',
    'ignore' => array('error', 'docs', 'blog', 'feed', 'search'),
    'paginate' => 10

    ));

    $results = $search->results();

    if($results) $results->paginate(10);
?>
<?php snippet('header'); ?>

    <?php snippet('menu'); ?>

    <main role="main">

    <?php if($results): ?>
    <h1 class="results"><?php echo $results->pagination->countItems() ?>
        <?php if($results->pagination->countItems()=='1'): ?> result
        <?php else: ?> results
        <?php endif ?> for <em><?php echo $search->query(); ?></em></h1>
    <?php endif ?>

        <?php if($results): ?>

        <?php foreach($results as $result): ?>

        <?php if($result->template() == 'article.text'): /*** post format: TEXT ***/ ?>
        <article class="blog format_text">
            <header class="post-meta">
                <h1><a href="<?php echo $result->url() ?>"><?php echo html($result->title()) ?></a></h1>
                Posted on <time datetime="<?php echo $result->date('c') ?>"><?php echo $result->date('d.m.Y'); ?></time>
                <?php if ($result->categories() != ''): ?> in
                <ul class="category">
                    <?php foreach(str::split($result->categories()) as $category): ?>
                    <li><a href="<?php echo url('category:' . urlencode($category)) ?>"><?php echo $category; ?></a></li>
                    <?php endforeach ?>
                </ul>
                <?php endif ?>
            </header>
            <p><?php echo excerpt($result->text(), 400) ?></p>
            <a class="read_more" href="<?php echo $result->url() ?>">read more →</a>
        </article>

        <?php elseif($result->template() == 'article.link'): /*** post format: LINK ***/ ?>
        <article class="blog format_link">
            <header class="post-meta">
                <h1><a href="<?php echo $result->customlink() ?>"><?php echo html($result->linktitle()) ?></a></h1>
                Posted on <time datetime="<?php echo $result->date('c') ?>"><?php echo $result->date('d.m.Y'); ?></time>
                <?php if ($result->categories() != ''): ?> in
                <ul class="category">
                    <?php foreach(str::split($result->categories()) as $category): ?>
                    <li><a href="<?php echo url('category:' . urlencode($category)) ?>"><?php echo $category; ?></a></li>
                    <?php endforeach ?>
                </ul>
                <?php endif ?>
            </header>
            <?php echo kirbytext($result->text()) ?>
            <a class="read_more" href="<?php echo $result->url() ?>">permalink</a>
        </article>

        <?php elseif($result->template() == 'article.video'): /*** post format: VIDEO ***/ ?>
        <article class="blog format_video">
            <header class="post-meta">
                Posted on <time datetime="<?php echo $result->date('c') ?>"><?php echo $result->date('d.m.Y'); ?></time>
                <?php if ($result->categories() != ''): ?> in
                <ul class="category">
                    <?php foreach(str::split($result->categories()) as $category): ?>
                    <li><a href="<?php echo url('category:' . urlencode($category)) ?>"><?php echo $category; ?></a></li>
                    <?php endforeach ?>
                </ul>
                <?php endif ?>
            </header>
            <?php echo kirbytext($result->video()) ?>
            <?php echo kirbytext($result->text()) ?>
            <a class="read_more" href="<?php echo $result->url() ?>">permalink</a>
        </article>

        <?php elseif($result->template() == 'page'): /*** pages ***/ ?>
        <article class="page">
            <h1><a href="<?php echo $result->url() ?>"><?php echo html($result->title()) ?></a></h1>
            <p><?php echo excerpt($result->text(), 400) ?></p>
        </article>
        <?php endif ?>

        <?php endforeach ?>


        <?php if($results->pagination()->hasPages()): /*** pagination ***/ ?>
        <nav class="pagination cf">
            <?php if($results->pagination()->hasPrevPage()): ?>
            <a class="prev" href="<?= $results->pagination()->prevPageURL() ?>">&lsaquo;&lsaquo; newer posts</a>
            <?php endif ?>
            <?php if($results->pagination()->hasNextPage()): ?>
            <a class="next" href="<?= $results->pagination()->nextPageURL() ?>">older posts &rsaquo;&rsaquo;</a>
            <?php endif ?>
        </nav>
        <?php endif ?>

        <?php else: ?>
        <h1 class="no_results">Sorry... No Results.</h1>
        <?php endif ?>

    </main>

<?php snippet('footer') ?>