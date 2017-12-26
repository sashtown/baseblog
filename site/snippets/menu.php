<nav class="menu cf" role="navigation">
  <ul class="cf">
    <?php foreach($pages->visible() as $item): ?>
    <li><a<?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
    <?php endforeach ?>
  </ul>
  <form class="search" role="search" action="<?= url('search') ?>">
    <label class="vh" for="search">Search</label>
    <input type="search" class="searchword" name="q" id="search" placeholder="Search..."/>
  </form>
</nav>
