<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>
<body>
<?php
//zadnie1  
 $c = 10 ;  
 $f = $c * 9/5 + 32; 
echo("10C na F = $f <br>");  
//zadanie 2 
$N1 = 2;
$N2 = 10;

$dodawanie = "+"; 
$odejmowanie = "-"; 
$mnozenie = "*"; 
$dzielenie = "/"; 
echo("$N1 $dodawanie $N2 =". $N1 + $N2 . "<br>");
echo("$N1 $odejmowanie $N2 =". $N1 - $N2. "<br>");
echo("$N1 $mnozenie $N2 =". $N1 * $N2. "<br>");
echo("$N1 $dzielenie $N2 =". $N1 / $N2. "<br>");

//zadanie3 
const Pi= 3.14159; 
$r = 5; 
$area = 2*$r*Pi;
$area = round($area,2); 
echo("Pole kola = $area <br>"); 
//zadanie 4 

$wiek = "10   "; 
$wiek  = (integer)$wiek ;
echo("Twoj skibidi wiek w dniach =". $wiek * 365 . "<br>") ;
//zadanie 5 

$string ="-123 "; 
$int = 5; 
$float = 44.5; 
$bool =true; 

echo(" bool = $bool  ;   float = $float  ; int = $int ;   string = $string <br>" );

$string = (integer)$string; 
$int = (string)$int; 
$float = (string)$float; 
$bool = (integer)$bool; 

echo(" bool =  $bool;  float = $float ; int = $int ; string = $string <br>" );


?>
</body>
</html>