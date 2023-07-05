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
require_once("./data/db.php");
?>

<!-- BODY -->
<body>
    <div class="container">

        <!-- CARD -->
        <?php
        
        foreach ($products as $product) {


        
        
        echo "<div class='card'>";

            // immagine prodotto
            echo"<div>" . $product ->  image .
                // "<img src= '$product -> immagine' >" .
                "</div>";

             
            // <!-- titolo prodotto -->
            echo"<h1>" . 
                $product -> name . 
                "</h1>";

            // prezzo prodotto
            echo"<div>" .
                    $product -> price . "$" .
                "</div>";

            // nome categoria animale
            echo"<div>" .
                    $product -> animalCategory -> name .
                "</div>";

            // icona categoria animale
            echo"<div>" .
                    $product ->  animalCategory -> icon .
                "</div>";
            
            

        echo "</div>";

        };
        ?>
    </div>
</body>
</html>