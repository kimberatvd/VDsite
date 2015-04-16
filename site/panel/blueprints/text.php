<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Page
pages: true
files: true
fields:
  title: 
    label: Title
    type:  text
  text: 
    label: Text
    type:  textarea
    size: large
filefields: 
  caption: 
    label: Caption
    type:  text
  alt:
    label: alt tag
    type: text