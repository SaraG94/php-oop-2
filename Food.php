<?php
/*importo la classe shop*/
require_once __DIR__ . "/Product.php";

class Food extends Product{
    public string $ingredients;
    public string $expiryDate;

    function __construct($_title, $_price, $_category, $_ingredients, $_expiryDate) {
        /*richiamo il costruttore padre*/
        parent:: __construct($_title, $_price, $_category, "Food");
        /*assegno i nuovi valori*/
        $this->ingredients = $_ingredients;
        $this->expiryDate = $_expiryDate;
    }

    public function getIngredients(){
        return $this->ingredients;
    }

    public function getExpiryDate(){
        return $this->expiryDate;
    }
    
}
?>