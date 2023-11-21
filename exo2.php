<?php

$str1 = "BONJOUR LE MONDE";
$str2 = "Esope reste ici et se repose";

function testPalindrome($str){
    $testerStr=strtolower(str_replace(" ","",$str));
    $length=strlen($testerStr)-1;
    $strinverse="";
    for($i=$length; $i>=0; $i--){
        $strinverse.=$testerStr[$i];
    }
    if($testerStr===$strinverse){
        return "true";
    }else{
        return "false";
    }
};
echo '<h1>Exercice 2</h1>';
echo testPalindrome($str1)."<br>";
echo testPalindrome($str2);