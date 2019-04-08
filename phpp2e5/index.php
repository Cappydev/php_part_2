<?php
  $gender = 'Femme';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>p2e5 php</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="animate.min.css" />
</head>
<body>
<p>
  <?php
     if($gender != 'Homme'){
      echo 'C\'est une développeuse !!';
    }else{
      echo 'C\'est un développeur';
    }
   ?>
</p>
</body>
</html>