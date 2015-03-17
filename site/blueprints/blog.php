<?php if(!defined('KIRBY')) exit ?>

title: Blog
pages:
  limit: 10
  sort: flip
  template:
    - article.text
    - article.link
    - article.video
files: true
fields:

  pageMeta:
    label: Page Meta
    type: headline
  title:
    label: Title
    type:  text
