<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro</title>
</head>
<body>
    <h1>Calculadora</h1>

    <form action="calculoex1.php" method="POST">

    <div>
    <label>Valor 1:</label>
    <input type="text" name="valor1"  placeholder="Primeiro número"> 
    </div>

    <div>
        <label>Valor 2:</label>
        <input type="text" name="valor2" placeholder="Segundo número" >
    </div>
<div>
    <h4>Operação:</h4>
</div>
    <div>
        <input type="radio" name="operador" value="adicao" checked>
        <label>Adição</label> 

        <input type="radio" name="operador" value="subtracao">     
        <label>Subtração</label>

        <input type="radio"name="operador" value="multiplicacao">
        <label>Multiplicação</label>

        <input type="radio" name="operador" value="divisao">
        <label>Divisão</label>
        
    </div>

    <input type="submit" value="Calcular" >
    
    


    </form>
    
</body>
</html>