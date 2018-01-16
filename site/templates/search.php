<?php snippet('header') ?>
<?php snippet('menu') ?>

  <main role="main">

    <?php $countItems = $pagination->countItems();

          if($results) {

            echo '<h1 class="result">';

            if($countItems == 0) {
              echo 'No results';
            }
            elseif($countItems == 1) {
              echo $countItems , ' result';
            }
            else {
              echo $countItems , ' results';
            }

            echo ' for “<mark>' , $query , '</mark>”</h1>';
    } ?>

    <?php if($results->count() != 0): ?>
    <ul class="results">
      <?php foreach($results as $result): ?>
      <li>
        <h2><a href="<?= $result->url() ?>"><?= $result->title()->html() ?></a></h2>
        <div class="meta">
          <time datetime="<?= $result->date('c') ?>"><?= $result->date('F dS, Y'); ?></time>
          <?php if ($result->tags() != ''): ?> |
          <ul class="tags">
            <?php foreach(str::split($result->tags()) as $tag): ?>
            <li><a href="<?= url('tag:' . urlencode($tag)) ?>">#<?= $tag ?></a></li>
            <?php endforeach ?>
          </ul>
          <?php endif ?>
        </div>
      </li>
      <?php endforeach ?>
    </ul>
    <?php endif ?>

    
    <?php if($pagination->hasPages()): // pagination ?>
    <nav class="pagination cf">
      <?php if($pagination->hasPrevPage()): ?>
      <a class="button prev" href="<?= $pagination->prevPageURL() ?>">&lsaquo;&lsaquo; newer results</a>
      <?php endif ?>
      <?php if($pagination->hasNextPage()): ?>
      <a class="button next" href="<?= $pagination->nextPageURL() ?>">older results &rsaquo;&rsaquo;</a>
      <?php endif ?>
    </nav>
    <?php endif ?>

  </main>

<?php snippet('footer') ?>
