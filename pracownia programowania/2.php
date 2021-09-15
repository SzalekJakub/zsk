<?php
echo "ZSK<br>";
echo "ZSK<br>";

$name="janusz";
echo "Imie $name <br>";
echo 'Imie $name<br>';

echo "text1","text2";
echo "text1","text2<br>";

$calkowita=10;

echo $calkowita;

$bin=0b101;
$oct=010;
$hex=0x10;
$prawda=true;
$falsz=false;
$x=0.5;

echo <<< ETYKIETA
<br>
$name <br>
Poznan <br>
ETYKIETA;

echo "nazwa zmiennej \$name";
echo gettype($x);
echo gettype($y);

$y=10;
$x=1;
echo $x;
$x=$x++;
echo $x;
$x=++$x;
echo $x;
$y=++$x;
echo $x;
echo $y;



//$x++ ++$x
?>
