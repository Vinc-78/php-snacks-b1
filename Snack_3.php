<?php


$toDO = ' Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà 
contenere lo stesso numero più di una volta';

echo $toDO;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>

<body>
    <main>

        <?php

        $newArray = [];

        /* Genero un array di numeri casuali diversi, con valori random da 1 a 100 */
        while (count($newArray) < 15) {
                $number = rand(1, 100);  

                /* aggiunge il numero casuale solo se NON è già presente nell'array */
                if (!in_array($number, $newArray)) {
                    $newArray[] = $number;
                }
            }


        ?>

        <ul>
            
                <?php  for ($i=0; $i < count($newArray); $i++) { 
                    echo '<li>';
                    echo $newArray[$i] ; 
                    echo '</li>'; }  ?>
           
        </ul>

    </main>

</body>

</html>