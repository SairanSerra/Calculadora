<?php

$valor1=$_POST['valor1'];
$valor2=$_POST['valor2'];


if ($valor1=='' || $valor2==''){
    echo "<b>POR FAVOR DIGITE UM VALOR</b>";
}else{
    echo "<b>VALOR DIGITADO NÃO É UM NÚMERO</b>";
}


if(is_numeric($valor1) && is_numeric($valor2)){ 

if($_POST['operador'] == 'adicao'){
$calcular=$valor1+$valor2;
$calcular=number_format($calcular,2,',','.');
echo "A soma dos valores é: {$calcular} " ;
}

if($_POST['operador']=='subtracao'){
    $calcular=$valor1-$valor2;
    $calcular=number_format($calcular,2,',','.');
    echo "A subtração dos valores é {$calcular}";
}

if($_POST['operador']=='multiplicacao'){
    $calcular=$valor1*$valor2;
    $calcular=number_format($calcular,2,',','.');
    echo "A multiplicação dos números é: {$calcular}";
}

if($_POST['operador']=='divisao'){
    $calcular=$valor1/$valor2;
    $calcular=number_format($calcular,2,',','.');
    echo "A divisão dos valores é: {$calcular}";
}
else{
    echo"<b>SELECIONE UMA OPERAÇÃO MATEMÁTICA</b>";
}

}




?>