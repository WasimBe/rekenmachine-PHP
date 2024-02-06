<?php

 echo "Welke operatie wil je uitvoeren? (+, -)" . PHP_EOL;
 $operatie = readline();
    $eerstegetal = readline("wat is het eerste getal? ") . PHP_EOL;

    $tweedegetal = readline("wat is het tweede getal? ") . PHP_EOL;

if ($operatie == "-") {
    echo $eerstegetal - $tweedegetal; 
} else {
    echo $eerstegetal + $tweedegetal;
}
 

     


 



?>