<?php if(!defined('KIRBY')) exit ?>

# page blueprint

title: Page
pages: true
files: true

fields:
   title: 
      label: Site Title
      type: text
   description:
      label: Site Description
      type: text
   text:
      label: Post
      type: textarea
      size: large
      buttons: true 