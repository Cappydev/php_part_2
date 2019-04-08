<?php
  $age = 18;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>p1e3 php</title>
</head>
<body>
<p>
  <?php
   if($age >= 18){
     echo 'Tu es majeur';
   }else{
      echo 'tu n\'es pas majeur';
    }
   ?>
</p>
</body>
</html>