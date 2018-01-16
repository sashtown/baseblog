<?php snippet('header') ?>
<?php snippet('menu') ?>

  <main role="main">

    <article>
      <header>
        <h1><?= $page->title()->html() ?></h1>
        <div class="meta">
          <time datetime="<?= $page->date('c') ?>"><?= $page->date('F dS, Y'); ?></time>
          <?php if($page->tags() != ''): ?> |
          <ul class="tags">
            <?php foreach($page->tags()->split(',') as $tag): ?>
            <li><a href="<?= url('tag:' . urlencode($tag)) ?>">#<?= $tag ?></a></li>
            <?php endforeach ?>
          </ul>
          <?php endif ?>
        </div>
      </header>
      <div class="content">
		<?= $page->text()->kt() ?>
      </div>
      <footer>
        <a class="button" href="<?= url() ?>">← Back to the blog</a>
        <a class="button" href="https://twitter.com/intent/tweet?source=webclient&text=<?= rawurlencode($page->title()); ?>%20<?= rawurlencode($site->title()) ?>%20<?= rawurlencode ($page->url()); ?>%20<?= ('via @your_twitter_account')?>" target="blank" title="Tweet this">Tweet</a>
      </footer>
    </article>

  </main>

<?php snippet('footer') ?>