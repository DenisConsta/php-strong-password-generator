<?php

var_dump($_GET['length']);

$data = [
  ['!', '?', '&', '%', '$', '<', '>', '^', '+', '-', '*', '/', '(', ')', '[', ']', '{', '}', '@', '#', '_', '='],
  ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'],
  [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
];

function getPassword($len, $data){
  $out = [];
  for($i=0; $i<$len; $i++){
    $arr = rand(0, 2);
    $out[] = $data[$arr][rand(0, count($data[$arr]))];
  }
  echo implode($out);
}

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

    <div class="result ">
      <h5 class="lead"> <?php
      if($_GET['length']>=8 && $_GET['length'] <= 32){
        getPassword($_GET['length'], $data);  
      }else echo "Errore nella lunghezza della password"
      ?>
      </h5>

    </div>

  </div>
</body>

</html>