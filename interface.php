<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULO COMBÚSTIVEL</title>
</head>
<body>
    <div>
       <h2>Instruções</h2> 
    </div>
    
    <div>
        <p>
            Eta aplicação temn como finalidade demonstrar os valores que serão gastos com combustível durante uma viagem, com base no consumo do seu veiculo, e com a distância do seu veículo, e com a distância determinada por você<!DOCTYPE html>
            
        </p>

        <p>
            Os combustíveis disponíveis para este cálculo são:

        </p>

        <form action="calculo.php" method="POST">
            <label>Gasolina</label>
            <input type="radio" name="combustivel" value="gasolina">
            <label>Alcool</label>
            <input type="radio" name="combustivel" value="alcool">
            <label>Diesel</label>
            <input type="radio" name="combustivel" value="diesel">
            

    </div>

    <div>
        <h2>Cálculo do valor (R$) do consumo</h2>
    </div>

    
        <div>

        <label>Distância em Kilômetros a ser percorrida</label>
        <input type="text" name="distancia">

        </div>

        <div>
            <label>Consumo de combustível do veículo (Km/l)</label>
            <input type="text" name="autonomia">
        </div>

       <input type="submit" value="Calcular">
    
    
</form>
    

    
    
</body>

</html>