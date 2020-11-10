<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php kiterjesztes</title>
</head>
<body>
    <h1>Cím</h1>
    <?php
        $a=10;
        echo "a pontszam=".$a;
        echo "<br>";
        echo "a pontszam={$a}";
        echo "<br>";
        echo "a pontszam={$a}";
        echo "<br>";
        var_dump($a);
        $b="Gyula";
        echo "<br>";
        var_dump($b);
        $tomb1=[1,2,3,4,5];
        $tomb2=array("alma","körte","szilva");
        echo "<br>";
        print_r($tomb1);
        echo "<br>".$tomb[0];
        echo "<br>";
        print_r($tomb2);
        echo "<br>";
        echo gettype($tomb1);

        echo "<br>";
        echo $a%2==0 ? "páros " : "páratlan";

        function faktorialis($n){
            if($n<=1)
                return 1;
            else
                return $n*faktorialis($n-1);
        }

    ?> 
    <p>HTML-ből használt php változó értéke: <?=$a?> </p>
    <p>Faktoriális számolás:<?=$a?>!= <?=faktorialis($a)?></p>
</body>
</html>