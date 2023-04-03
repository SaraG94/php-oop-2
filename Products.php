<?php

require_once "Food.php";
require_once "Games.php";
require_once "Kennels.php";

$prodotto1 = new Product("marca di cibo", 20, "categoria cane/gatto", "generico");

$cibo1 = new Food("Crocchette", 35, "categoria cane", "manzo, riso, verdure", "22-10-2026");
$cibo2 = new Food("Crocchette", 30, "categoria gatto", "pollo, verdure", "22-11-2027");

$game1 = new Games("Lancia palline", 25, "categoria cane", "plastica/gomma", "media/grande");
$game2 = new Games("Pesce", 20, "categoria gatt0", "Cotone", "tutte e taglie");

$Kennel1 = new Kennels("Cuccia rettangolare", 45, "categoria cane", "Cotone/Microfibra", "lxh: 105x60cm");
$Kennel2 = new Kennels("Cuccia tonda", 20, "categoria gattO", "Cotone/Microfibra", "r: 30cm");
var_dump($cibo1, $cibo2, $game1, $game2, $Kennel1, $Kennel2 );
?>