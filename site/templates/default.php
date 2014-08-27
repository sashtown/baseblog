<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main role="main">

		<article>
      <header>
        <h1><?php echo html($page->title()) ?></h1>
      </header>
			<div class="content">
        <?php echo kirbytext($page->text()) ?>
      </div>
		</article>

	</main>

<?php snippet('footer') ?>