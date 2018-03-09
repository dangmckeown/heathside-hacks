<?php

$resource = 'https://docs.google.com/spreadsheets/d/e/2PACX-1vQKlbS5a9jczvCfMhPu-Q3yP5fmDBP64Jx5KgggZG0G4U_c12a7TtKpIA9Ar8RLOqK8a2Z7GPEtM0lZ/pub?output=csv';

$fh = fopen($resource,'rb');

while(!feof($fh) && $row = fgetcsv($fh)){
  var_dump($row);
}
