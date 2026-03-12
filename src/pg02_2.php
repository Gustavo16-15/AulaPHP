<h1>Pg02_1-12/3/26</h1>
<?php
$idade = 34;

echo"idade= $idade <br>";

$cep = "01012123";
echo"cep = $cep<br>";


$preco =5247.543;
echo"preco= R$ ";
echo number_format($preco,2,",",".");

echo "<hr>";

$cor = "red";

echo "cor = $cor <br>";
echo 'cor = $cor <br>';

echo"<h2 class= '$cor'> titulo 1</h2>";

$ativo = true;

echo "esta ativo? $ativo <br>";
echo "Aquela era  ".$cor."<br>";

$nota = 7.8;
echo "nota = ".$nota - (int)$nota;
//git add .
//git commit -m "aula 120326"
//git push
?>

<h2>titulo 2</h2>

<style>
h2{
color: red;
}
.red {
    color : blue;
}

</style>