<?php
include "Termek.class.php";

$termek = [];
//fajlbeolvasas:
$file = new SplFileObject("raktar.txt");
//$elsosor = $file->fgets();
while (!$file->eof()) {
    $sor = $file->fgets();
    $sorTomb = explode(" ", $sor);
    $termek[] = new Termek($sorTomb[0], $sorTomb[1], $sorTomb[2], $sorTomb[3], $sorTomb[4]);
}
//a termekek neveinek megjelenitese egy HTML felsorolasban:
$strOpciok="";
$listaSr = "";
$termekArak="";
$kivalasztottTermek="";
$sorStr= "";
foreach ($termek as $i=>$obj){
    $listaSr.= $obj->htmlLiTag($i);
    $sorStr.=$obj->htmlTableRow($i);
}
uasort($termek,'rendez');

function rendez($a,$b){
    return $a->nev > $b->nev ? 1:0;
}
foreach($termek as $i=>$obj)
    $strOpciok.=$obj->htmlOptionTag($i);

if( isset($_GET['elkuld'])){
    //print_r($_GET);
    $cikk=$_GET['termek'];
    $szurtTomb=array_filter($termek, function($obj) use($cikk) {
        return $obj->cikk==$cikk;
    });
    print_r($szurtTomb);
    foreach($szurtTomb as $obj)
    $kivalasztottTermek=$obj->megjelenit();
}

if(isset($_GET['elkuld'])){
    $ar=trim($_GET['ar']);
    $szurtTomb=array_filter($termek, function($obj) use($ar) {
        return trim($obj->ar==$ar);
}


?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>

    <title>Fajl beolvasas,feldolgozas</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <ul><?= $listaSr?></ul>
            </div>
            <div class="col-5">
                <table><?=$sorStr?></table>
            </div>
            <div class="col-3">
            <form action="" method="get">    
                <select name="termek" id="">
                    <option value="0">Valassz ki egy termeket</option>
                    <?=$strOpciok?>
                </select>
                    <input type="submit" name="elkuld" value="megjeleniti a kivalasztott termeket">
                    <input type="text" name="ar">
                </form>
                <div><?=$kivalasztottTermek?></div>
            </div>
            </div>
        </div>
    </div>
</body>

</html>