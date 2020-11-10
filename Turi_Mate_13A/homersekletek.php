<?php
$homersekletek=[20,18,21,22,23,24,20,22,25,26,22,21,23,19,25,23,23,23,22,22,25,26,27,26,25,23,28,27];
$valami="";
foreach($homersekletek as $nap=>$fok)
    $valami.="<tr><td>".($nap+1)."</td><td>".$fok."</td></tr>";

$atlag=0;
foreach($homersekletek as $nap=>$fok)
$atlag=$atlag+$fok;
$foatlag=$atlag/count($homersekletek);

$hanyszor=0;
foreach($homersekletek as $nap=>$fok){
if($fok>=26)
$hanyszor++;
}

$legnagyobb=max($homersekletek);

$leghidegebbfok=min($homersekletek);
$leghidegebbnap=array_search($leghidegebbfok,$homersekletek)+1;

$melyiknap=0;
foreach($homersekletek as $nap=>$fok){
if($fok==23) 
$melyiknap=$nap+1;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Balaton</h1>
<table><thead><th>Nap</th><th>Fok</th></thead><?=$valami?></table>
<p>Mennyi volt a víz átlaghőmérséklete? <?=$foatlag?></p>
<p>Hányszor mértünk 26 Celsius fokot? <?=$hanyszor?></p>
<p>A legmagasabb hőmérséklet: <?=$legnagyobb?></p>
<p>A leghidegebb nap: <?=$leghidegebbnap?></p>
<p>Melyik napon volt 23 fokos a víz: <?=$melyiknap?></p>
    
</body>
</html>