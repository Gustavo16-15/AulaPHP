<?php
echo "<h1>While</h1>";
$i= 0;
 while ($i<5){
    echo "$i";
    $i++;
 }

//  valor incial 0
// condição  0 é menor que 5
// contador i++
// foi execultado 5 vezes
// 5 é menor que 5 falsa 
echo "<hr>";
$i= 10;
 while ($i<15){
    echo "$i";
    echo "<br>";
    $i++;
 }
echo "<hr>";
 $i= 4;
 while ($i>=0){
    echo "$i";
    echo "<br>";
    $i--;
 }
 echo "<hr>";
 $i= 0;
 while ($i<=10 ){
    echo "$i";
    echo "<br>";
    $i+=2;
 }
 echo "<hr>";
 $i = 7;
 do{
    echo "$i";
    $i++;
 }while ($i<5);

 echo "<hr>";
 for ($i=0;$i<5;$i++){
    echo "$i";
 }
 echo "<hr>";
 for ($i=0; $i<4; $i++) {
  for ($j=0; $j<5; $j++) {
    echo "$i $j<br>";
  }
}
?>