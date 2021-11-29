 <?php


$toDO =' Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un 
punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” ';

  echo $toDO;


?> 

<br><br>
<?php

$soluzione = ' ?name=carlo&email=carlo@email.it&age=31 ';

  echo "una soluzione di esempio è da aggiungere all'url......" . $soluzione ;


  
  $nome = $_GET['name'];
  $email = $_GET['email'];
  $eta = $_GET['age'];

  var_dump($nome, $email, $eta);


  //  https://www.php.net/manual/en/function.filter-var.php  il metodo filter_var

  
  if ((strlen($nome) > 3) &&
      filter_var($email, FILTER_VALIDATE_EMAIL) &&
      filter_var($eta, FILTER_VALIDATE_INT)) {
?>
    <p style="color: green; font-weight:bolder">

     OK tutte le specifiche rispettate :)
    </p>

<?php } else { ?>

    <p style="color: red">
      KO credenziali non rispettate
    </p>

<?php } ?>