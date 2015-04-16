<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Page
pages: true
files: true
fields:
  title: 
    label: Title
    type:  text
  contact: 
    label: contact
    type:  textarea
    size: large
  directions: 
    label: directions
    type:  textarea
    size: large
  employment: 
    label: employment
    type:  textarea
    size: large
filefields: 
  caption: 
    label: Caption
    type:  text
  alt:
    label: alt tag
    type: text