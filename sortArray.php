<?php 
$Friends = ["Sahil","Asmit","Srijan","Aadarsha"];
sort($Friends);

$arrlength = count($Friends);
for($x = 0; $x < $arrlength; $x++) {
  echo $Friends[$x];
  echo "<br>";
}
?>