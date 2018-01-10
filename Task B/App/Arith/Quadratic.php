<?php
namespace App\Arith;


function quadratic($a, $b, $c, $root){
	$precision = 3; 
 
	$denum = $b*$b-4*$a*$c;
	if ($denum < 0) {
		$plusminusone = " + "; $plusminustwo = " - ";
		$denum *=-1;
		$complex=(sqrt($denum)/(2*$a));
		if ($a < 0){ 
			$plusminustwo = " + ";
			$plusminusone = " - ";
			$complex *= -1;
		} 
		$lambdaone = round(-$b/(2*$a), $precision).$plusminusone.round($complex, $precision).'i';
		$lambdatwo = round(-$b/(2*$a), $precision).$plusminustwo.round($complex, $precision).'i';
	} 
 
	else if ($denum == 0) { 
		$lambdaone = round(-$b/(2*$a), $precision);
		$lambdatwo = round(-$b/(2*$a), $precision);
	} 
 
	else { 
		$lambdaone = (-$b+sqrt($denum))/(2*$a);
		$lambdaone = round($lambdaone, $precision);
		$lambdatwo = (-$b-sqrt($denum))/(2*$a);
		$lambdatwo = round($lambdatwo, $precision);
	} 
 
	
	if ($root == 'root1') {return $lambdaone;}
	if ($root == 'root2') {return $lambdatwo;}
	if ($root == 'both') {return $lambdaone. ' and ' .$lambdatwo;}
}

echo quadratic(9, 3, 90, 'both');