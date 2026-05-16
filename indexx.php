<?php

require("class.php");

class Post{
    public $titolo;
    public $categoria;
    public $tag;

    public function __construct($_titolo, Category $_categoria, $_tag){
        $this->titolo = $_titolo;
        $this->categoria = $_categoria;
        $this->tag = $_tag;
    }

    public function title(){
        return $this->titolo;
    }

    public function tag(){
    return $this->tag;
    }

    public function getCategory(){
       return $this->categoria->getMyCategory();
    }
}

$footbal = new Sport;
$post = new Post("Titolo", $footbal, "boh");
echo $post->getCategory();
echo $post->tag();
echo $post->title();
