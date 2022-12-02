<?php
$data = [
  ['!', '?', '&', '%', '$', '<', '>', '^', '+', '-', '*', '/', '(', ')', '[', ']', '{', '}', '@', '#', '_', '='],
  ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'],
  [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
];

function getPassword($len, $data)
{
  $out = [];
  for ($i = 0; $i < $len; $i++) {
    $arr = rand(0, 2);
    $out[] = $data[$arr][rand(0, count($data[$arr]))];
  }
  return implode($out);
}

function checkLen($len)
{
  if ($len >= 8 && $len <= 32)
    return true;
  else
    return false;
}
?>