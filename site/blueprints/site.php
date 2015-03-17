<?php if(!defined('KIRBY')) exit ?>

title: Site
pages:
  template:
    - default
files: true
fields:

  siteMeta:
    label: Site Meta
    type: headline
  title:
    label: Site title
    type:  text
  description:
    label: Site description
    type:  text
    icon:  info-circle
  line-a:
    type: line
  info:
    label: Site info
    type:  textarea
    icon:  file-text-o
