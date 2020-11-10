<?php
class Termek
{
    public $cikk;
    public $nev;
    public $db;
    public $gyarto;
    public $ar;

    public function __construct($cikk, $nev, $db, $gyarto, $ar)
    {
        $this->cikk = $cikk;
        $this->nev = $nev;
        $this->db = $db;
        $this->gyarto = $gyarto;
        $this->ar = $ar;
    }
}


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
$lista = "";
foreach ($termek as $obj) 
    $lista .= "<li>" . $obj->nev . "</li>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul><?= $lista ?></ul>
</body>

</html>