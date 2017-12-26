<?php snippet('header') ?>
<?php snippet('menu') ?>

  <main role="main">

    <article>
      <header>
        <h1><?= $page->title()->html() ?></h1>
      </header>
      <div class="content">
        <?= $page->text()->kt() ?>
      </div>
    </article>

  </main>

<?php snippet('footer') ?>