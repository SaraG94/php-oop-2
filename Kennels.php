<?php
/*importo la classe shop*/
require_once __DIR__ . "/Product.php";

class Kennels extends Product{
    public $fabric;
    public $size;

    function __construct($_fabric,$_size) {
        /*richiamo il costruttore padre*/
        parent::__construct($_title, $_price, $_category, "Kennel");
        /*assegno i nuovi valori*/
        $this->fabric = $_fabric;
        $this->size = $_size;
    }
}
?>