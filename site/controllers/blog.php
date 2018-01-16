<?php

return function($site, $pages, $page) {

  // tag results
  $tag = urldecode(param('tag'));
  $articlesByTag = $pages->find('blog')
                         ->children()
                         ->visible()
                         ->filterBy('tags', $tag, ',')
                         ->flip()
                         ->paginate(10);

  // latest articles
  $articles = $pages->find('blog')
                    ->children()
                    ->visible()
                    ->flip()
                    ->paginate(3);

  return array(
    'tag'   => $tag,
    'articlesByTag' => $articlesByTag,
    'articles' => $articles,
    'pagination' => $articles->pagination()
  );

};
