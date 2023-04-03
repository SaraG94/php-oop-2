<?php

require_once __DIR__ ."/traits/Consignment.php";

class Product{
    use Consignment; 
    public string $title;
    public string $price;
    /*categorie */
    public $category;
    /*tipi di prodotto*/
    public $typeProduct;

    function __construct($_title, $_price, $_category,$_typeProduct) {
        $this->title = $_title;
        $this->price = $_price;
        $this->category = $_category;
        $this->typeProduct = $_typeProduct;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle(string $newValue){
        $this->validTitle($newValue, 3);
        
        $this->title = $newValue ;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getCategory(){
        return $this->category;
    }

    public function validTitle($titleToTest, $minLength){
        if(strlen($titleToTest)< $minLength){
            throw new Exception("Il testo è troppo corto");
        }
        return true;
    }
}
?>