<?php

$woord = "quotering";
$punten = 0;

for($i = 0; $i < strlen($woord); $i++) {
    /* echo $woord[$i]; */
    switch(strtoupper($woord[$i])) {
        case "Q":
            $punten += 10;
            break;
        case "U":
            $punten += 4;
            break;
        case "T":
        case "R":
            $punten += 2;
            break;
        case "I":
       case "N":
        case "E":
            $punten += 1;
            break;
    }
}

?>
