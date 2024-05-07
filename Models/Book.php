<?php 
include_once __DIR__ ."/Product.php";
class Book extends Product {
    public $numPages;
    public function __construct($title, $price, $rating, $cover, $numPages){
        $this->numPages = $numPages;
        parent::__construct($title, $price, $rating, $cover) ;
    }
}