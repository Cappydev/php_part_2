<?php
  $age = 101;
  $genre = 'Femme';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>p1e3 php</title>
</head>
<body>
<div>
  <?php
   if ($genre == 'Homme' && $age >= 18  ) {
    echo "Vous êtes un homme et vous êtes majeur";
   }
   elseif ($genre == 'Femme' && $age >= 18 ) {
     echo "Vous êtes une femme et vous êtes majeur";
   }
   elseif ($genre == 'Femme' && $age < 18) {
    echo "Vous êtes une femme et vous êtes mineur";
  }
  else {
    echo "Vous êtes un homme et vous êtes mineur";
  }
   ?>
</div>
</body>
</html>