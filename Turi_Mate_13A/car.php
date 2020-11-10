<?php
$strOp="";
include "Car.class.php";
$file=new SplFileObject("autok.txt");
$autok=[];
while(!$file->eof()){
    $sor=$file->fgets();
    $tomb=explode(";",$sor);
    $autok[]=new Car($tomb[0],$tomb[1],$tomb[2],$tomb[3]);
}
print_r($autok);

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <select name="marka" >
            <option value="0">Válassz márkat...</option>
            <?=$strOp?>
        </select>
        <input type="submit" name="szures" value="szűrés">
    </form>
</body>
</html>