<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Ecommerce PHP</title>

    <!-- cdn fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style>

    .container {
        display: flex
    }

    .card {
        border: black 1px solid;
        width: 33%
    }

</style>

<?php
<<<<<<< HEAD

class Product {
    public $immagine;
    public $titolo;
    public $prezzo;
    public $iconaCategoria;
    public $tipoArticolo;
    public $tipoAnimale;

    public function __construct($immagine, $titolo, $prezzo, $iconaCategoria, $tipoArticolo, $tipoAnimale) {

        $this -> immagine = $immagine;
        $this -> titolo = $titolo;
        $this -> prezzo = $prezzo;
        $this -> iconaCategoria = $iconaCategoria;
        $this -> tipoArticolo = $tipoArticolo;
        $this -> tipoAnimale = $tipoAnimale;

    }
}



$products = [
    new Product("immagine", "Crocchette Delicious", 14.99, "<i class='fa-solid fa-cat'></i>", "Cibo", "Gatto"),
    new Product("immagine", "Cuccia XL", 47.20, "<i class='fa-solid fa-dog'></i>", "Cuccia", "Cane"),
    new Product("immagine", "Pallina indistruttibile", 8.99, "<i class='fa-solid fa-dog'></i>", "Gioco", "Cane"),
    
];


// echo "<br>";
// var_dump($products);

?>


<body>
    <div class="container">

        <!-- CARD -->
        <?php
        
        foreach ($products as $product) {


        
        
        echo "<div class='card'>";

            // immagine prodotto
            echo"<div>" . $product -> immagine .
                // "<img src= '$product -> immagine' >" .
                "</div>";

             
            // <!-- titolo prodotto -->
            echo"<h1>" . 
                $product -> titolo . 
                "</h1>";

            // prezzo prodotto
            echo"<div>" .
                    $product -> prezzo . "$" .
                "</div>";

            // icona prodotto
            echo"<div>" .
                    $product -> iconaCategoria .
                "</div>";

            // itipo articolo
            echo"<div>" .
                    $product -> tipoArticolo .
                "</div>";
            
            

        echo "</div>";

       

        };
        ?>

    </div>
</body>
</html>



=======
echo "hello world";
echo "<br>";
echo "hello world";
echo "prova da seconda repo";
?>
>>>>>>> 35f76fef4f5c2bb98e13f31c1772571f68274fd2
