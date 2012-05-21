<?php if(!defined('KIRBY')) exit ?>

# article blueprint

title: Article (Format: Link)
pages: false
files: true

fields:
   title:
      label: Site Title
      type: text
   linktitle: 
      label: Link Title
      type: text
      required: true
   customlink: 
      label: Custom Link
      type: text
      validate: url
      required: true
   date:
      label: Date
      type: date
   categories:
      label: Category
      type: text
   text:
      label: Post
      type: textarea
      size: large
      buttons: true
   description:
      label: Site Description
      type: text
