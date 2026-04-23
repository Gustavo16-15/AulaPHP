<?php
$idade = 16;

if ($idade >= 18) {
    echo "Você é maior de idade.";
} else {
    echo "Você é menor de idade.";
}
$semaforo = "";
$vaiEmbora="verde";
$atencao= "amarelo";
$para = "vermelho";

if ($semaforo == $vaiEmbora){
    echo "Siga";
    }

    elseif ($semaforo == $atencao ) {
        echo "Atenção";
        }elseif ($semaforo == $para){
            echo "Pare";
            }else{
                echo "semaforo quebrado";
                }
echo "<hr>";
    switch ($semaforo = $vaiEmbora ) {
    case $vaiEmbora:
        echo "Siga";
        break;
    case $atencao:
        echo "Atenção";
        break;
    case $para:
        echo "Pare";
        break;
    default:
        echo "Semaforo quebrado";
}
echo "<hr>";
$diaSemana = date('w');  
switch ($diaSemana) {
    case 0:
        echo "Domingo";
        break;
    case 1:
        echo "Segunda-feira";
        break;
    case 2:
        echo "Terça-feira";
        break;
    case 3:
        echo "Quarta-feira";
        break;
    case 4:
        echo "Quinta-feira";
        break;
    case 5:
        echo "Sexta-feira";
        break;
    case 6:
        echo "Sábado";
        break;
    default:
        echo "Dia inválido";
}
echo"<hr>";
 date_default_timezone_set('America/Sao_Paulo');//(definir) o fuso horário
echo date('d/m/Y H:i:s');  // Exemplo de saída: 08/10/2024 14:35:20

echo "<hr>";
$senha = 'minhaSenhaSecreta';
$hash = md5($senha);
echo $hash;  // Exemplo de saída: 5f4dcc3b5aa765d61d8327deb882cf99


echo "<hr>";

 
$nome = "uninove";
echo "nome = $nome";
echo "<br> MD5 =" .md5($nome);
$hash = password_hash($senha, PASSWORD_DEFAULT);
echo  "<br> hash  = $hash";  // Exemplo de saída: $2y$10$KQlN0cEOPuR1QGblFIO2wOYubDZi9RCKJja5TezW8oh3VOAfjD2Gm

                ?> 