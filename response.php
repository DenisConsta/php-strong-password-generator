<?php
session_start();
var_dump($_SESSION);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Result</title>
</head>

<body>


  <h3>
    <?php
    if ($_SESSION['res'] !== null)
      echo 'Password : ' . $_SESSION['res'];
    else
      echo "errore nella lunghezza della password";
    ?>
  </h3>

</body>

</html>