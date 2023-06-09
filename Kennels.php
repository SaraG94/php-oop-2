<?php
/*importo la classe shop*/
require_once __DIR__ . "/Product.php";

class Kennels extends Product{
    public string $fabric;
    public string $size;

    function __construct($_title, $_price, $_category, $_fabric, $_size) {
        /*richiamo il costruttore padre*/
        parent::__construct($_title, $_price, $_category, "Kennel");
        /*assegno i nuovi valori*/
        $this->fabric = $_fabric;
        $this->size = $_size;
    }

    public function getFabric(){
        return $this->fabric;
    }

    public function getSize(){
        return $this->size;
    }
}
?>