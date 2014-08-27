<?php snippet('header') ?>
<?php snippet('menu') ?>

  <main role="main">

    <article>
      <header>
        <h1><?php echo html($page->title()) ?></h1>
        <div class="meta">
          <time datetime="<?php echo $page->date('c') ?>"><?php echo $page->date('F dS, Y'); ?></time>
          <?php if($page->tags() != ''): ?> |
          <ul class="tags">
            <?php foreach(str::split($page->tags()) as $tag): ?>
            <li><a href="<?php echo url('tag:' . urlencode($tag)) ?>">#<?php echo $tag; ?></a></li>
            <?php endforeach ?>
          </ul>
          <?php endif ?>
        </div>
      </header>
      <div class="content">
        <?php echo kirbytext($page->text()) ?>
      </div>
      <footer>
        <a class="button" href="<?php echo url() ?>">← Back to the blog</a>
        <a class="button" href="https://twitter.com/intent/tweet?source=webclient&text=<?php echo rawurlencode($page->title()); ?>%20<?php echo rawurlencode($site->title()) ?>%20<?php echo rawurlencode ($page->url()); ?>%20<?php echo ('via @your_twitter_account')?>" target="blank" title="Tweet this">Tweet</a>
      </footer>
    </article>

  </main>

<?php snippet('footer') ?>