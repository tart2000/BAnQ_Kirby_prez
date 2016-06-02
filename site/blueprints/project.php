<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  theurl:
    label: Web address
    type:  url
  text:
    label: Text
    type:  textarea
  tags:
    label: Tags
    type:  tags