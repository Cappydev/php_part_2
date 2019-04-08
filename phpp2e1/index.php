<?php
  $age = 19;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>p2e1 php</title>
</head>
<body>
<p>
  <?php
   echo $age. ' ';
   if($age >= 18) {
     echo 'Vous êtes majeur!';
   }
   else {
     echo 'Vous êtes mineur !';
   }
   ?>
</p>
</body>
</html>