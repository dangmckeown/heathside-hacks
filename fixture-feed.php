<?php

$resource = 'https://docs.google.com/spreadsheets/d/e/2PACX-1vQKlbS5a9jczvCfMhPu-Q3yP5fmDBP64Jx5KgggZG0G4U_c12a7TtKpIA9Ar8RLOqK8a2Z7GPEtM0lZ/pub?output=csv';

$fh = fopen($resource,'rb');

while(!feof($fh) && $row = fgetcsv($fh)){
  //check if first entry has date - if so, include it
if(preg_match("/\d/",$row[0])){  
?>
<div class="fixture-details">
  <?php

  echo "<b>{$row[1]}</b> ({$row[2]}) <br />";
  echo "{$row[0]} | {$row[3]}<br />";
  echo "<a href='{$row[4]}'";
  //do external link if offsite
  if(preg_match("/^http/"),$row[4]){
  echo " target='_blank'";
  }
  echo ">More details &rarr;</a>";

  ?>
</div>
<?php
}
}

fclose($fh);
