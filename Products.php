<?php

require_once "Food.php";
require_once "Games.php";
require_once "Kennels.php";

$prodotto1 = new Product("marca di cibo", 20, "categoria cane/gatto", "generico");

// try{
//     $food1 = new Food("Ce", 35, "categoria cane", "manzo, riso, verdure", "22-10-2026");
// } catch(Exception $e){
//     echo "Errore" . $e->getMessage();
// }

$food1 = new Food("Crocchette", 35, "categoria cane", "manzo, riso, verdure", "22-10-2026");
$food2 = new Food("Crocchette", 30, "categoria gatto", "pollo, verdure", "22-11-2027");

$game1 = new Games("Lancia palline", 25, "categoria cane", "plastica/gomma", "media/grande");
$game2 = new Games("Pesce", 20, "categoria gatto", "Cotone", "tutte e taglie");

$kennel1 = new Kennels("Cuccia rettangolare", 45, "categoria cane", "Cotone/Microfibra", "lxh: 105x60cm");
$kennel2 = new Kennels("Cuccia tonda", 20, "categoria gatto", "Cotone/Microfibra", "r: 30cm");
//var_dump($prodotto1, $food1, $food2, $game1, $game2, $kennel1, $kennel2 );

$foods=[$food1, $food2];
$games=[$game1, $game2];
$kennels=[$kennel1,$kennel2];
//var_dump($foods,$games,$kennels);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Php-oop-2</title>
</head>
<body>
    <main class="container pb-5">
        <h1 class="my-5">Shops</h1>

        <section>
            <h2>Alimenti</h2>

            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach ($foods as $food) :
                ?>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <ul>
                                <li><strong>Titolo:</strong> <?php echo $this->getTitle() ?></li>
                                <li><strong>Prezzo:</strong> <?php echo $this->getPrice() ?></li>
                                <li><strong>Categoria:</strong> <?php echo $this->getCategory() ?></li>
                                <li><strong>Ingredienti:</strong> <?php echo $this->getIngredients() ?></li>
                                <li><strong>Da consumare entro il:</strong> <?php echo $this->getExpiryDate() ?></li>
                            </ul>
                        </div>
                    </div>
               </div>
                <?php
                    endforeach
                ?>
            </div>
        </section>

    </main>
</body>
</html>