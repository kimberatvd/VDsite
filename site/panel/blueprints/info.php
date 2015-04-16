<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Page
pages: true
files: true
fields:
  title: 
    label: Title
    type:  text
  results: 
    label: Results
    type:  textarea
    size:  large
  about: 
    label: About the Agency
    type:  textarea
    size:  large
  bios: 
    label: Bios
    type:  textarea
    size:  large
  awards: 
    label: Awards
    type:  textarea
    size:  large
filefields: 
  caption: 
    label: Caption
    type:  text
  alt:
    label: alt tag
    type: text