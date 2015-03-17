<?php if(!defined('KIRBY')) exit ?>

title: Link post
pages: false
files: true
fields:

  articleMeta:
    label: Article Meta
    type: headline
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
  link Meta:
    label: Link Meta
    type: headline
  customlink:
    label: Customlink
    type:  url
    width: 1/2
  linktitle:
    label: Linktitle
    type:  text
    width: 1/2
    icon:  bookmark

  articleContent:
    label: Article Content
    type: headline
  text:
    label: Text
    type:  textarea
    icon:  file-text-o
