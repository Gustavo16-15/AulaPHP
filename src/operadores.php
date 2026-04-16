<?php
$a=10;
$b="10";
echo "Igualdade = ".($a==$b)."<br>";
echo "Idêntico = ".($a===$b)."<br>";
echo "Não igual = ".($a!=$b)."<br>";
echo "Não Idêntico = ".($a!==$b)."<br>";

$a=50;
$b=120;
$c= ($a<=$b);
$d= !($a<=$b);
var_dump($c);
echo "<br>";
var_dump($d);

$a=50;
$b=120;
$c=200;
$d=(($a<=$b) and ($a<=$c));
$e=(($a<=$b) &&  ($a>=$c));
var_dump($d);
echo "<br>";
var_dump($e);
?>
