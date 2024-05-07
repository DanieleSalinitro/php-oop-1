<?php
include_once __DIR__ ."/Product.php";
class Movie extends Product {
    public $language;
    public function __construct($title, $price, $rating, $cover, $language){
        $this->language = $language;
        parent::__construct($title, $price, $rating, $cover);
    }
    public function showMovie(){
        echo "Titolo: " . $this->title . "<br>";
        echo "Prezzo: " . $this->price . "<br>";
        echo "Voto: " . $this->rating . "<br>";
        echo "<img src=" . $this->cover  . "<br>";
        echo "Lingua: " . $this->language . "<br>"; 
    }
}
