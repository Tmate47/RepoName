<?php
$valtozo="";
if(isset($_POST["gomb"])){
    $valtozo=$_POST["text"];
    echo($valtozo);
}

?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oldalcím</title>
</head>
<body>
    <form action="" method="post">
        <label for="for">Felhasználó név:</label>
        <input type="text" name="text" id="" value="<?=$valtozo?>">
        <input type="submit" name="gomb" value="Katt" >
    </form>
</body>
</html>