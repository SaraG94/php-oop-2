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

    public function getPrice(){
        return $this->price;
    }
}
?>