<?php
  $isEasy = true;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>p2e2 php</title>
</head>
<body>
  <div>
    <h1>Exercice 4</h1>
    <p>
    Créer une variable isEasy de type booléan et l'initialiser avec une valeur.
Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.
Bonus : L'écrire de deux manières différentes.
    </p>
    <a href="https://github.com/La-Manu/Exercices-PHP-partie-2"><input type="button" value="Click ça fait rien"></a>
  </div>
  <div>
    <?php
    //on utilise le == pour faire une comparaison.
    //on pourrais  utiliser le === pour comparer strictement (comparer le type et la valeur )
    if($isEasy){
      echo 'C\'est facile!!'; 
    }
    else {
      echo 'C\'est difficile !!!.';
    }

    switch($isEasy){
     case true:
       echo 'C\'est facile!!';
     break;
     case false:
       echo 'C\'est difficile!!';
     break;
    }
    ?>
  </div>
</body>
</html>