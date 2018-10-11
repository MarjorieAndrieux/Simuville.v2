<?php
require 'classe/ville.php';


$var = $_POST['paramVille']; 
$var1 = intval($var[0]);
$var2 = floatval($var[1]);
$var3 = floatval($var[2]);
$ville = new Ville($var1, $var2, $var3);
$ville->getRegisterVille();

$json = json_encode($var);
echo $json;






