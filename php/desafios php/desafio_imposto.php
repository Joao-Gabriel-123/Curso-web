<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

</head>

<body>
    
    <?php 

        $salario = 1500;

        function calcularImposto($salario){
            if($salario <= 1903.98){
                return $salario;

            } else if($salario >= 1903.99 && $salario <= 2826.65){
                return $salario -= $salario * 0.075;

            } else if($salario >= 2826.66 && $salario <= 3751.05){
                return $salario -= $salario * 0.15;

            } else if($salario >= 3751.06 && $salario <= 4664.68){
                return $salario -= $salario * 0.225;
            
            } else {
                return $salario -= $salario * 0.275;
        
            }

        }

        $x = calcularImposto($salario);

        echo "O salário é de: $x";
    ?>


</body>

</html>