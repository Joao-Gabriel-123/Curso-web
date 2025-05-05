<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

</head>

<body>
    
    <?php 

        $idade = 30;
        $peso = 70;

        if ($idade >= 16 and $idade <= 69 and $peso >= 50) {
            echo 'Atende aos requisitos';
        } else{
            echo 'Não atende aos requisitos';
        }
    ?>


</body>

</html>