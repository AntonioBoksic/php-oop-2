<?php

require_once("./models/AnimalCategory.php");
require_once("./models/Product.php");
require_once("./models/Food.php");
require_once("./models/Toy.php");

// test per vedere se funziona exception
try{
    $testException = new AnimalCategory("","<i class='fa-solid fa-dog'></i>");
    } 
catch (Exception $e) {
echo "Errore : " . $e -> getMessage();
}



// prove AnimalCategory
$categoriaCane = new AnimalCategory("cane","<i class='fa-solid fa-dog'></i>");
$categoriaGatto = new AnimalCategory("gatto", "<i class='fa-solid fa-cat'></i>");
echo "<br>-------------<br>";
var_dump($categoriaCane);
echo "<br>-------------<br>";
var_dump($categoriaGatto);

//prove Product
$prodottoProva = new Product("immagine", "nomeprova", 99999, $categoriaCane);
echo "<br>-------------<br>";
var_dump($prodottoProva);

//prove Food
$f1 = new Food("immagine", "crocchetta Special", 100, $categoriaCane, "2023/10/11");
echo "<br>-------------<br>";
var_dump($f1);

//prove Toy
//QUA UTILIZZO UN TRAIT ED è PER QUESTO CHE HO UN PARAMETRO PER IL CONSTRUCTOR IN PIù
$toy1 = new Toy("immagine", "pallina indistruttibile", 9.55, $categoriaCane, "Red", "10 giorni");
echo "<br>-------------<br>";
var_dump($toy1);
echo "<br>";
echo "questo è il TOY con il trait shippingDays";

// ARRAY DI PRODOTTI DA STAMPARE IN PAGINA
$products = [
    new Food("immagine", "Crocchette Delicious", 14.99, $categoriaGatto, "dataRandom"),
    new Toy("immagine", "Pallina indistruttibile", 9.55, $categoriaCane, "Red", "10 giorni"),
    
];