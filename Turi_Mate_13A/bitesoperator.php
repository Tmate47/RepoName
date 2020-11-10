<?php
$tomb=[1,76,3,33,67,34,61,14,90,14,53,87,1];

$paros=[];
$paratlan=[];

foreach($tomb as $elem){
    if($elem & 1)
    $paratlan[]=$elem;
    else{
        $paros[]=$elem;
    }
}
print_r($tomb);
echo "<br>";
echo "paros tomb:".implode(";", $paros);
echo "<br>";
echo "paratlan tomb:".implode(";", $paratlan);

$paros2 = array_filter($tomb,"parosFgv");

function parosFgv($n){
    if($n & 1){
        return false;
}
        else{
            return true;
        }    
}

    $paratlan2=array_filter($tomb,function($e){
        return $e & 1 ? true : false;
    });
    echo "<hr>";
    echo "paros tomb:".implode(";",$paros2);
    echo "<br>";
    echo "paratlan tomb:".implode(";",$paratlan2);

    $egyediErtekekTombje=array_unique($tomb);
    echo "<br>";
    echo "egyedi tomb:".implode(";",$egyediErtekekTombje);
    sort($egyediErtekekTombje);
    echo "<br>";
    echo "egyedi tomb:".implode(";",$egyediErtekekTombje);

    $szoveg="alma korte szilva korte";
    $szTomb=explode(" ",$szoveg);
    echo "<br>";
    print_r($szTomb);

    echo "<br>";
    echo date("Y-m-d");
    echo "<br> Jelenlegi dátum:";
    print_r(getdate());

    
?>
