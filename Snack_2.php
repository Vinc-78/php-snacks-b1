<?php


$toDO =' Creare un array di array. Ogni array figlio avrà come 
chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e 
come valore un array di post associati a quella data. 
Stampare ogni data con i relativi post.';

  echo $toDO;


?> 


<?php

$postsArray = [
    '20/11/2021' => 
    [
      [
        'titolo' => 'Saluti',
        'autore' => 'Marco Rossi',
        'testo' => ' Testo post 1'
      ],
      [
        'titolo' => 'Risposta',
        'autore' => 'Luca Verdi',
        'testo' => ' Testo post 2'
      ],
    ],
    '21/11/2021' => 
    [
      [
        'titolo' => 'Post 3',
        'autore' => 'Marco Polo',
        'testo' => ' Testo post 3'
      ],
      [
          'titolo' => 'Post 4',
          'autore' => 'Marco Ubaldo',
          'testo' => ' Testo post 4'
      ],
      [
        'titolo' => 'Post 5',
        'autore' => 'Marco Ubaldo',
        'testo' => ' Testo post 5'
    ],
    ],
    '22/11/2021' => 
    [
      [
        'titolo' => 'Post 6',
        'autore' => 'Dj Stù',
        'testo' => ' Testo post 6'
      ],
      [
        'titolo' => 'Post 7',
        'autore' => ' Lui Chi',
        'testo' => ' Testo post 7'
      ],
      
    ]
  ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <div>
        <ul>
            <?php 
                for ($i=0; $i < count(array_keys($postsArray)); $i++) { 
                    $date  = array_keys($postsArray)[$i];
                    $postSingolo =  count($postsArray[$date]);
                    
                    echo "<li> <h3> $date </h3></li>";
                    
                    for ($j=0; $j < $postSingolo; $j++) { 
                        echo "Titolo: " . $postsArray[$date][$j]['titolo'] . "<br>";
                        echo "Autore: " . $postsArray[$date][$j]['autore'] . "<br>";
                        echo "Testo: " . $postsArray[$date][$j]['testo'] . "<br> <br>";                           
                    }
              
                }
            
            
            ?>
        </ul>

    </div>
</body>
</html>