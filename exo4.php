<?php

include 'exo3.php';

function cesear($num, $message){
    $len = strlen($message);
    $code = '';
    for ($i=0; $i <$len ; $i++) {
    $code .= char_rot($num, $message[$i]);
    }
    return $code;
   }
   
   echo '<h1>Exercice 4</h1>';
   echo cesear(1,'HELLO WORLD'); 