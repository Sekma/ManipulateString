<?php

function char_rot($n,$c){
	$code = ord($c); 
	
	if($code < 64 || $code > 91) return;
	
	if($code > 64 && $code < 91){
	
		$num = ( ($code - 65  + $n) % 26 ) + 65 ;
	}
	return chr($num);
}

echo '<h1>Exercice 3</h1>';
echo char_rot(1,'A')."<br>";