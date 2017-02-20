<?php

// Maak een Array met 3 namen van medeleerlingen.
$names = array("Sander", "Remco", "Kenzo");

// Itereer er over met een for-loop. Print ze af in een HTML ongenummerde lijst.
echo "<ul>";
for ($i=0; $i < count($names); $i++) {
  echo "<li>$names[$i]</li>";
}
echo "</ul>";

// Itereer er over met een foreach-loop. Print ze af in HTML genummerde lijst.
echo "<ol>";
foreach ($names as $name) {
  echo "<li>$name</li>";
}
echo "</ol>";

$naam = "Willy";

// Itereer met een for-loop over de variable $naam alsof het een array was.
for ($i=0; $i < strlen($naam); $i++) {
  echo "$naam[$i]";
}

?>
