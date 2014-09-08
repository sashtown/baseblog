<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: 
  template:
    - blog
    - feed
    - search
files: true
fields:
  title:
    label: Title
    type:  text
  description:
    label: Description
    type:  text
    icon:  info-circle
  line-a:
    type:  line
  info:
    label: Site info
    type:  textarea
    icon:  file-text-o
