<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Page
pages: false
files: true
fields:
  title: 
    label: Title
    type:  text
  text: 
    label: text
    type:  textarea
    size:  large
  blurb: 
    label: blurb
    type:  textarea
    size:  large
  video:
    label: video
    type:  text
filefields: 
  caption: 
    label: Caption
    type:  text
  alt:
    label: alt tag
    type: text