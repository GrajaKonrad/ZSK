<?php
//tablice indeksowane numerycznie

$colors=array('red','green','blue');
echo "początkowa zawartość tablicy: <br>";

for ($i=0; $i <count($colors) ; $i++) {
  echo "Element ",$i+1,": $colors[$i]<br>";
}
echo "<br>";

$colors[3]='magenta';
for ($i=0; $i <count($colors) ; $i++) {
  echo "Element ",$i+1,": $colors[$i]<br>";
}
 ?>
