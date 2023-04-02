<?php

require_once "Food.php";
require_once "Games.php";
require_once "Kennels.php";



$cibo1 = new Food("dfsf,fgdg,gd",22-10-2054);
$prodotto1 = new Product("marca di cibo", 20, "categoriaGatto", $cibo1);
var_dump($cibo1);


?>