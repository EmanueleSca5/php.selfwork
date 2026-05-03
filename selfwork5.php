<?php

$number = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];

$somma = 0;
$counter = 0;
for($i = 0; $i <= 10; $i++){
    if($number[$i] % 2 == 0){
        $counter++;
        $somma += $number[$i];
    };
    };
    $mediaPari = $somma / $counter;
    echo($somma . "\n");
    echo($mediaPari);

