<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $tomb2=array("alma","korte","szilva","dio");
        foreach($tomb2 as $ertek)
        echo $ertek;

        echo "<br>";
        foreach($tomb2 as $index=>$ertek)
        echo $index."-".$ertek.";";
    
        echo "<br>";
        $diakok=array("Dani"=>5,"Peti"=>2,"Kata"=>4);
        print_r($diakok);

        foreach($diakok as $kulcs=>$ertek)
        echo "<br>".$kulcs.":".$ertek;

        $osszeg=0;
        foreach($diakok as $kulcs=>$ertek)
        $osszeg+=$ertek;
        echo "<br>".round($osszeg/count($diakok),2);
        
    ?>
</body>
</html>