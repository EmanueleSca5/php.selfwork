<?php

// Requisiti password.
// Min. lunghezza: 7 caratteri
// Almeno un numero
// Almeno una maiscuola
// Almeno un catayyere speciale

function checkLenght($psw){
    if(strlen($psw) >= 7){
        return true;
    }else{
        echo "Password troppo corta, almeno 7 caratteri \n";
        return false;
    }

};


function checkUpper($psw){
    for($i = 0; $i < strlen($psw); $i++){
        if(ctype_upper($psw[$i])){
            return true;
        }
    }
    return false;
}

function checkNumber($psw){
    for($i = 0; $i < strlen($psw); $i++){
        if(is_numeric($psw[$i])){
            return true;
        }
    }
    return false;
}


function checkSpecial($psw){
    $special = ["$", "@", "!", "%", "?"];
    for($i = 0; $i < strlen($psw); $i++){
        if(in_array($psw[$i], $special)){
            return true;
        }
    }
    return false;
}

function checkPassword($psw){
    if(checkSpecial($psw) && checkUpper($psw) && checkNumber($psw) && checkLenght($psw)){
        echo "Password corretta \n";
        return true;
    }else{
        echo "Password non corretta \n";
        return false;
    }
}



    do{
        $password = readline("Inserisci la password:  ");
        
        }while(!checkPassword($password));

