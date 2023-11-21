<?php

$str1 = "BONJOUR TOUT LE MONDE";
$str2 = "RADAR";

function strInv($str){
    $length=strlen($str)-1;
    $strinverse="";
    for($i=$length; $i>=0; $i--){
        $strinverse.=$str[$i];
    }
    return $strinverse;
}
$strinverse1 = strInv($str1);
$strinverse2 = strInv($str2);

echo '<h1>Exercice 1</h1>';
echo "<p>L'inverse de $str1 est \"$strinverse1\".</p>";
echo "<p>L'inverse de $str2 est \"$strinverse2\".</p>";