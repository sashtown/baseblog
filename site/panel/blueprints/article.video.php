<?php if(!defined('KIRBY')) exit ?>

# article.video blueprint

title: VIDEO POST
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
        required: true
    categories:
        label: Category
        type: text
        required: true
    video: 
        label: Video
        type: text
        required: true
        help: Just use the Kirbytext tags for YouTube/Vimeo! [http://getkirby.com/blog/text-formatting-101]
    text:
        label: Post
        type: textarea
        size: large
        buttons: true
