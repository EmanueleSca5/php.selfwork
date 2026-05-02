<?php

$users = [
    [
        "name" => "Emanuele",
        "surname" => "Scagliarini",
        "gender" => "Male"
    ],
    [
        "name" => "Marta",
        "surname" => "Maffei",
        "gender" => "Female"
    ],
    [
        "name" => "Luca",
        "surname" => "De leo",
        "gender" => "NB"
    ]
];


foreach ($users as $user){
    if($user["gender"] == "Male"){
        echo("Buongiorno Sig." . " " . $user["name"] . " " . $user["surname"] . "\n");
    }elseif($user["gender"] == "Female"){
        echo("Buongiorno Sig.ra" . " " . $user["name"] . " " . $user["surname"] . "\n");
    }else{
        echo("Buongiorno" . " " . $user["name"] . " " . $user["surname"] . "\n");

    }
};