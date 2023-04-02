<?php

class Product{
    public $title;
    public $price;
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
}
?>