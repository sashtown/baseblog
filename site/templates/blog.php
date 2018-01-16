<?php snippet('header') ?>
<?php snippet('menu') ?>

  <main role="main">

    <?php if(param('tag')): // show tag results ?>
    <?= '<h1 class="result">Articles tagged with “<mark>' , $tag , '</mark>”</h1>'; ?>

    <ul class="results">
      <?php foreach($articlesByTag as $article): ?>
      <li>
        <h2><a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a></h2>
        <div class="meta">
          <time datetime="<?= $article->date('c') ?>"><?= $article->date('F dS, Y'); ?></time>
          <?php if ($article->tags() != ''): ?> |
          <ul class="tags">
            <?php foreach($article->tags()->split(',') as $tag): ?>
            <li><a href="<?= url('tag:' . urlencode($tag)) ?>">#<?= $tag ?></a></li>
            <?php endforeach ?>
          </ul>
          <?php endif ?>
        </div>
      </li>
      <?php endforeach // article overview ends ?>
    </ul>

    <?php else: // show latest articles ?>

    <h1 class="vh">Blog</h1>

    <?php foreach($articles as $article): // article overview ?>

    <?php if($article->template() == 'article.text'): // text posts ?>
    <article>
      <header>
        <h1><a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a></h1>
        <div class="meta">
          <time datetime="<?= $article->date('c') ?>"><?= $article->date('F dS, Y'); ?></time>
          <?php if($article->tags() != ''): ?> |
          <ul class="tags">
          <?php foreach($article->tags()->split(',') as $tag): ?>
          <li><a href="<?= url('tag:' . urlencode($tag)) ?>">#<?= $tag ?></a></li>
          <?php endforeach ?>
          </ul>
          <?php endif ?>
        </div>
      </header>
      <p><?= excerpt($article->text(), 400) ?>
      <a href="<?= $article->url() ?>">[read more →]</a></p>
    </article>

    <?php elseif($article->template() == 'article.link'): // link posts ?>
    <article>
      <header>
        <h1><a href="<?= $article->customlink() ?>"><?= $article->linktitle()->html() ?> →</a></h1>
        <div class="meta">
          <time datetime="<?= $article->date('c') ?>"><?= $article->date('F dS, Y'); ?></time>
          <?php if($article->tags() != ''): ?> |
          <ul class="tags">
            <?php foreach($article->tags()->split(',') as $tag): ?>
            <li><a href="<?= url('tag:' . urlencode($tag)) ?>">#<?= $tag ?></a></li>
            <?php endforeach ?>
          </ul>
          <?php endif ?>
          | <a href="<?= $article->url() ?>">permalink</a>
        </div>
      </header>
      <?= $article->text()->kt() ?>
    </article>

    <?php elseif($article->template() == 'article.video'): // video posts ?>
    <article>
      <header class="meta">
        <time datetime="<?= $article->date('c') ?>"><?= $article->date('F dS, Y'); ?></time>
        <?php if($article->tags() != ''): ?> |
        <ul class="tags">
          <?php foreach($article->tags()->split(',') as $tag): ?>
          <li><a href="<?= url('tag:' . urlencode($tag)) ?>">#<?= $tag ?></a></li>
          <?php endforeach ?>
        </ul>
        <?php endif ?>
        | <a href="<?= $article->url() ?>">permalink</a>
      </header>
      <?= $article->text()->kt() ?>
    </article>
    <?php endif ?>

    <?php endforeach // article overview ends ?>

    <?php endif // tag results / latest articles ends ?>


    <?php if($pagination->hasPages()): // pagination ?>
    <nav class="pagination cf">
      <?php if($pagination->hasPrevPage()): ?>
      <a class="button prev" href="<?= $pagination->prevPageURL() ?>">&lsaquo;&lsaquo; newer posts</a>
      <?php endif ?>
      <?php if($pagination->hasNextPage()): ?>
      <a class="button next" href="<?= $pagination->nextPageURL() ?>">older posts &rsaquo;&rsaquo;</a>
      <?php endif ?>
    </nav>
    <?php endif ?>

  </main>

  <?php snippet('footer') ?>