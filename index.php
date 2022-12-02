<?php

require_once __DIR__ . './functions.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css'
    integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw=='
    crossorigin='anonymous' />
  <title>PHP Strong Password Generator</title>
</head>

<body>
  <div class="container">
    <h1>PHP Strong Password Generator</h1>
    <h3 class="lead my-3">La lunghezza dev'essere compresa tra 8 e 32 caratteri</h3>

    <form action="./index.php">
      <div class="mb-3 row">
        <label for="inputPassword" class="col-auto col-form-label text-center">Length : </label>
        <div class="col-auto">
          <input type="text" class="form-control" id="inputPassword" name="length">
        </div>
      </div>
      <button class="btn btn-primary">Genera</button>
    </form>

    <div class="result py-5">
      <h5 class="lead">
        <?php
        if(checkLen($_GET['length'])) echo getPassword($_GET['length'], $data);
        else echo "Lunghezza errata !"
        ?>
      </h5>

    </div>

  </div>
</body>

</html>