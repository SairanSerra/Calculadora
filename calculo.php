<?php

if ($_POST){

$distancia= $_POST['distancia'];
$autonomia=$_POST['autonomia'];

if(is_numeric($distancia) && is_numeric($autonomia)){

    if($distancia>0 && $autonomia>0){

        if ($_POST['combustivel']=='gasolina'){
    $gasolina=6.10;
    $calculo=($distancia/$autonomia)*$gasolina;
    echo "O valor da gasolina será de R$" .$calculo;
}

if ($_POST['combustivel']=='alcool'){
$alcool=5.80;
$calculo=($distancia/$autonomia)*$alcool;
echo "O valor da alcool será de R$ ".$calculo;
}

if ($_POST['combustivel']=='diesel'){
    $diesel=4.0;
    $calculo=($distancia/$autonomia)*$diesel;
    $calculo=number_format($calculo,2,',','.');
    echo "O Valor do diesel será de R$ " .$calculo;
}
    }

else{
    echo"<b>AUTONOMIA E DISTÂNCIA DEVEM SER MAIOR QUE ZERO</b>";
}
}
else{
    echo "<b>CARACTERE DIGITADO NÃO É UM NÚMERO</b>";
}
    

}
else{
    echo "<b>VALOR NÃO RECEBIDO</b>";
}




?>