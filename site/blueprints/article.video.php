<?php if(!defined('KIRBY')) exit ?>

title: Video post
pages: false
files: true
fields:
  title:
    label: Title
    type:  text
    width: 1/2
  date:
    label:  Date
    type:   date
    width:  1/2
    format: MM/DD/YYYY
  description:
    label: Description
    type:  text
    icon:  info-circle
  tags:
    label: Tags
    type:  tags
  line-a:
    type: line
  text:
    label: Text
    type:  textarea
    icon:  file-text-o
