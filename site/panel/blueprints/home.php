<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Page
pages: true
files: true
fields:
  title: 
    label: Title
    type:  text
  shortnews: 
    label: Short News
    type:  textarea
    size: small
  newstitle: 
    label: News Title
    type:  text
  text: 
    label: Text
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