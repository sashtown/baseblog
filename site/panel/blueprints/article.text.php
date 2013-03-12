<?php if(!defined('KIRBY')) exit ?>

# article.text blueprint

title: TEXT POST
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
    text:
        label: Post
        type: textarea
        size: large
        buttons: true
        required: true 