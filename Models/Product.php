<?php 
class Product{
    public $title; 
    public $price;
    public $rating;
    public $cover; 
    public function __construct($title, $price, $rating, $cover){
        $this->title = $title;
        $this->price = $price;
        $this->rating = $rating;
        $this->cover = $cover;
    }

}
