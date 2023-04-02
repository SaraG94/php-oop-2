<?php
/*importo la classe shop*/
require_once __DIR__ . "/Product.php";

class Food extends Product{
    public $ingredients;
    public $expiryDate;

    function __construct($_ingredients,$_expiryDate) {
        /*richiamo il costruttore padre*/
        parent::__construct($_title, $_price, $_category, "Food");
        /*assegno i nuovi valori*/
        $this->ingredients = $_ingredients;
        $this->expiryDate = $_expiryDate;
    }
}
?>