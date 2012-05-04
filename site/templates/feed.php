<?php 

$articles = $pages->find('blog')->children()->visible()->flip()->limit(10);

snippet('feed', array(
  'link'  => url('blog'),
  'items' => $articles,
  'descriptionExcerpt' => false,
  'descriptionField'  => 'text'
));

?>

