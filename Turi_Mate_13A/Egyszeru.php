<?php
$kerulet="";
$r="";
$hiba="";
if(isset($_POST['szam'])){
    $r=$_POST['szam'];
    if(intval($r)>0)
    $kerulet=round($r*2*pi(),2);
    else
    $hiba="Rossz számot adtál meg!";
}
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KörKerület</title>
</head>
<body>
    <div><?=$hiba?></div>
    <form action="" method="post">
    Adj meg egy megfelelő számot:
    <input type="text" name="szam" id="" value="<?=$r?>">
    <input type="submit" value="Számol">
    </form>
    <div><?=$kerulet?></div>
</body>
</html>