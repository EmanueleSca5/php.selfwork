<?php

abstract class Category{
    abstract public function getMyCategory();
}

class Attualità extends Category{

    public function getMyCategory(){
        echo "Sono attualità\n";
    }
}

class Sport extends Category{

    public function getMyCategory(){
        echo "Sono Sport\n";
    }
}

class Gossip extends Category{

    public function getMyCategory(){
        echo "Sono attualità\n";
    }
}

class Storia extends Category{

    public function getMyCategory(){
        echo "Sono attualità\n";
    }
}

$calcio = new Sport;
$calcio->getMyCategory();