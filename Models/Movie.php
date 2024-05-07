<?php
include_once __DIR__ ."/Product.php";
class Movie extends Product {
    public $language;
    public function __construct($title, $price, $rating, $cover, $language){
        $this->language = $language;
        parent::__construct($title, $price, $rating, $cover);
    }
}
