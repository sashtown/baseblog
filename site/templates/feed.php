<?php

echo page('blog')->children()->visible()->flip()->limit(10)->feed(array(
  'title'       => $page->title(),
  'description' => $page->description(),
  'link'        => 'blog',
));

?>