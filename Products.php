<?php

require_once "Food.php";
require_once "Games.php";
require_once "Kennels.php";

$prodotto1 = new Product("marca di cibo", 20, "categoria", "generico");

$cibo1 = new Food("dfsf,fgdg,gd",22-10-2054);
$cibo2 = new Food("dsask, jdnfds, nfgj",22-10-2054);
var_dump($cibo1, $cibo2);

?>