<<?php
echo "Van welk getal wil je de faculteit weten?\n";

$getal = rtrim(fgets(STDIN));
$fac = $getal;
$i = 1;
if (is_numeric($getal)){
	while ($i < $getal){
    	$fac = $fac * $i;
    	$i++;
	}
	echo "De faculteit van " . $getal . " is " . $fac . "\n";
}
?>