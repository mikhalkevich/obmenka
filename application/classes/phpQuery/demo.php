<?php
require('phpQuery/phpQuery.php');
  $habrablog = file_get_contents('http://www.nix.ru/include/view-photo.html?good_id=87181&pid=2254');
  
  $document = phpQuery::newDocument($habrablog);
  
  $hentry = $document->find('#mthumbnail')->attr('src');

  
  echo $hentry;