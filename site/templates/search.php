<?php
  $query = get('q');
  $results = page('blog')
                ->search($query, array('words' => true))
                ->visible()->sortBy('date', 'desc')
                ->paginate(10);
?>
<?php snippet('header') ?>
<?php snippet('menu') ?>

  <main role="main">

    <?php $countItems = $results->pagination()->countItems();

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

            echo  ' for “<mark>' , $query , '</mark>”</h1>';
    } ?>

    <?php if($results->count() != 0): ?>
    <ul class="results">
      <?php foreach($results as $result): ?>
      <li>
        <h2><a href="<?php echo $result->url() ?>"><?php echo html($result->title()) ?></a></h2>
        <div class="meta">
          <time datetime="<?php echo $result->date('c') ?>"><?php echo $result->date('F dS, Y'); ?></time>
          <?php if ($result->tags() != ''): ?> |
          <ul class="tags">
            <?php foreach(str::split($result->tags()) as $tag): ?>
            <li><a href="<?php echo url('tag:' . urlencode($tag)) ?>">#<?php echo $tag; ?></a></li>
            <?php endforeach ?>
          </ul>
          <?php endif ?>
        </div>
      </li>
      <?php endforeach ?>
    </ul>
    <?php endif ?>


    <?php if($results->pagination()->hasPages()): // pagination ?>
    <nav class="pagination cf">
      <?php if($results->pagination()->hasPrevPage()): ?>
      <a class="button prev" href="<?php echo $results->pagination()->prevPageURL() ?>">&lsaquo;&lsaquo; newer results</a>
      <?php endif ?>
      <?php if($results->pagination()->hasNextPage()): ?>
      <a class="button next" href="<?php echo $results->pagination()->nextPageURL() ?>">older results &rsaquo;&rsaquo;</a>
      <?php endif ?>
    </nav>
    <?php endif ?>

  </main>

<?php snippet('footer') ?>