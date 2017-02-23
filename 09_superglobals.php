<?php
// definieer een globale variable en print hem af op 2 manieren
$een_var = "hallo";
echo $een_var;
echo "<br>";
echo $GLOBALS["een_var"];
echo "<br>";
// gebruik de $_SERVER-superglobal om zoveel mogelijk informatie af te drukken over het binnenkomende request
echo "<h2>SERVER info</h2>";
echo "<ul>";
foreach($_SERVER as $key => $val) {
   echo "<li>" . $key . " -> " . $val . "</li>";
}
echo "</ul>";
// Gebruik de $_GET-superglobal om de parameters van een URL in een ongenummerde lijst weer te geven.
// Gebruik als URL b.v. `http://localhost/08_superglobals.php?kleur=rood&vorm=ovaal&grootte=medium`.
// Tip: $_GET is een associatieve array.
echo "<h2>GET parameters</h2>";
echo "<ul>";
foreach($_GET as $key => $val) {
   echo "<li>" . $key . " -> " . $val;
}
echo "</ul>";
?>
