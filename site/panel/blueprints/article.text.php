<?php if(!defined('KIRBY')) exit ?>

# article blueprint

title: Article (Format: Text)
pages: false
files: true

fields:
   title: 
      label: Site Title
      type: text
   description:
      label: Site Description
      type: text
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