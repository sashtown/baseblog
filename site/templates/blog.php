<?php snippet('header') ?>
<?php snippet('menu') ?>

  <main role="main">

    <?php if(param('tag')): // show tag results ?>
    <?php $tag = urldecode(param('tag'));
          $articles = $pages->find('blog')
                            ->children()
                            ->visible()
                            ->filterBy('tags', $tag, ',')
                            ->flip()
                            ->paginate(10);

          echo '<h1 class="result">Articles tagged with “<mark>' , $tag , '</mark>”</h1>';
    ?>

    <ul class="results">
      <?php foreach($articles as $article): ?>
      <li>
        <h2><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h2>
        <div class="meta">
          <time datetime="<?php echo $article->date('c') ?>"><?php echo $article->date('F dS, Y'); ?></time>
          <?php if ($article->tags() != ''): ?> |
          <ul class="tags">
            <?php foreach(str::split($article->tags()) as $tag): ?>
            <li><a href="<?php echo url('tag:' . urlencode($tag)) ?>">#<?php echo $tag; ?></a></li>
            <?php endforeach ?>
          </ul>
          <?php endif ?>
        </div>
      </li>
      <?php endforeach ?>
    </ul>


    <?php else: // show latest articles ?>

    <h1 class="vh">Blog</h1>

    <?php $articles = $pages->find('blog')->children()->visible()->flip()->paginate(3) ?>

    <?php foreach($articles as $article): // article overview ?>

    <?php if($article->template() == 'article.text'): // text posts ?>
    <article>
      <header>
        <h1><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h1>
        <div class="meta">
          <time datetime="<?php echo $article->date('c') ?>"><?php echo $article->date('F dS, Y'); ?></time>
          <?php if($article->tags() != ''): ?> |
          <ul class="tags">
          <?php foreach(str::split($article->tags()) as $tag): ?>
          <li><a href="<?php echo url('tag:' . urlencode($tag)) ?>">#<?php echo $tag; ?></a></li>
          <?php endforeach ?>
          </ul>
          <?php endif ?>
        </div>
      </header>
      <p><?php echo excerpt($article->text(), 400) ?>
      <a href="<?php echo $article->url() ?>">[read more →]</a></p>
    </article>

    <?php elseif($article->template() == 'article.link'): // link posts ?>
    <article>
      <header>
        <h1><a href="<?php echo $article->customlink() ?>"><?php echo html($article->linktitle()) ?> →</a></h1>
        <div class="meta">
          <time datetime="<?php echo $article->date('c') ?>"><?php echo $article->date('F dS, Y'); ?></time>
          <?php if($article->tags() != ''): ?> |
          <ul class="tags">
            <?php foreach(str::split($article->tags()) as $tag): ?>
            <li><a href="<?php echo url('tag:' . urlencode($tag)) ?>">#<?php echo $tag; ?></a></li>
            <?php endforeach ?>
          </ul>
          <?php endif ?>
          | <a href="<?php echo $article->url() ?>">permalink</a>
        </div>
      </header>
      <?php echo kirbytext($article->text()) ?>
    </article>

    <?php elseif($article->template() == 'article.video'): // video posts ?>
    <article>
      <header class="meta">
        <time datetime="<?php echo $article->date('c') ?>"><?php echo $article->date('F dS, Y'); ?></time>
        <?php if($article->tags() != ''): ?> |
        <ul class="tags">
          <?php foreach(str::split($article->tags()) as $tag): ?>
          <li><a href="<?php echo url('tag:' . urlencode($tag)) ?>">#<?php echo $tag; ?></a></li>
          <?php endforeach ?>
        </ul>
        <?php endif ?>
        | <a href="<?php echo $article->url() ?>">permalink</a>
      </header>
      <?php echo kirbytext($article->text()) ?>
    </article>
    <?php endif ?>

    <?php endforeach // article overview ends ?>


    <?php endif ?>


    <?php if($articles->pagination()->hasPages()): // pagination ?>
    <nav class="pagination cf">
      <?php if($articles->pagination()->hasPrevPage()): ?>
      <a class="button prev" href="<?php echo $articles->pagination()->prevPageURL() ?>">&lsaquo;&lsaquo; newer posts</a>
      <?php endif ?>
      <?php if($articles->pagination()->hasNextPage()): ?>
      <a class="button next" href="<?php echo $articles->pagination()->nextPageURL() ?>">older posts &rsaquo;&rsaquo;</a>
      <?php endif ?>
    </nav>
    <?php endif ?>

  </main>

  <?php snippet('footer') ?>