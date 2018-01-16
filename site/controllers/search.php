<?php

return function($site, $pages, $page) {

  $query   = get('q');
  $results = page('blog')->search($query, array('words' => true))
                         ->visible()
                         ->sortBy('date', 'desc')
                         ->paginate(10);

  return array(
    'query'   => $query,
    'results' => $results,
    'pagination' => $results->pagination()
  );

};
