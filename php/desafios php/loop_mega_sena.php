<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

</head>

<body>
    
    <?php 

        function numeroMegaSena(){
            $numerosSorteio = array();

            for($x = 0; $x < 6;){
                $num = rand(1, 60);
                if(!(in_array($num, $numerosSorteio))){
                    $numerosSorteio[] = $num;
                    $x++;
                } else{
                    continue;
                }

            }
            return $numerosSorteio;
        }

        echo('<pre>');
        print_r(numeroMegaSena());
        echo('</pre>');
    ?>


</body>

</html>