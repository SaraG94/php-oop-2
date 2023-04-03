<?php
/*importo la classe shop*/
require_once __DIR__ . "/Product.php";

class Games extends Product{
    public string $material;
    public string $suggestSize;

    function __construct($_title, $_price, $_category, $_material,$_suggestSize) {
        /*richiamo il costruttore padre*/
        parent::__construct($_title, $_price, $_category, "Game");
        /*assegno i nuovi valori*/
        $this->material = $_material;
        $this->suggestSize = $_suggestSize;
    }

    public function getMaterial(){
        return $this->material;
    }

    public function getSuggestSize(){
        return $this->suggestSize;
    }
}
?>