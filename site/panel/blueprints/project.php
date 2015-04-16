<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Page
pages: false
files: true
fields:
  title: 
    label: Title
    type:  text
  probsol:  
    label: Is there a problem and solution?
    type: radio
    options:
      yesps:  yes, there is
      nops: no, there isn't
    default: yesps
  problem: 
    label: Problem (or write-up if there is no problem/solution)
    type:  textarea
    size:large
  solution: 
    label: Solution
    type:  textarea
    size:  large
  video:
    label: video
    type:  text
  videoloc: 
    label: Video Location
    type:  multicheckbox
    options:
      first: first
      last: last
  scope: 
    label: Scope
    type:  multicheckbox
    options:
      research: research strategy
      copy: copywriting
      brand: brand positioning
      naming: naming
      identity: visual identity
      art: art direction
      ad: advertising
      web: websites
      sms: social media strategy
      pub: publications
      pack: packaging
      video: video
  type: 
    label: Type
    type:  multicheckbox
    options:
      identity: identity
      publications: publications
      websites: websites
      advertising: advertising
      packaging: packaging
      other: other
  category: 
    label: Category
    type:  multicheckbox
    options:
      hr: hospitality & retail
      cp: cultural & non-profit
      da: developers & architects
filefields: 
  caption: 
    label: Caption
    type:  text
  alt:
    label: alt tag
    type: text