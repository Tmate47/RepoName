<?php
$strOp="";
$strSorok="";
include "Auto.class.php";
$file=new SplFileObject("autok.txt");
$autok=[];
while(!$file->eof()){
    $sor=$file->fgets();
    $tomb=explode(";",$sor);
    $autok[]=new Auto($tomb[0],$tomb[1],$tomb[2],$tomb[3]);
}
//print_r($autok);
$markaTomb=[];
foreach($autok as $auto)
    $markaTomb[]=$auto->nev;

//print_r($markaTomb);
$markaTomb=array_unique($markaTomb);
sort($markaTomb);


foreach($markaTomb as $markaNev){
    $strOp.="<option>".$markaNev."</option>";
}
    ///szürés:
    //print_r($_POST);
    $szurtTomb=[];
    if(isset($_POST["szures"])){
        $nev=$_POST["marka"];
        foreach($autok as $auto)
            if($auto->nev==$nev) $szurtTomb[]=$auto;

        //print_r($szurtTomb);
        foreach($szurtTomb as $auto)
        $strSorok.=$auto->htmlTableRow();
    }
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" />
    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    
    <title>Cím</title>
    <style>
    .jumbotron{
        background: linear-gradient(to bottom, rgba(255,255,255,0.4) ,rgba(255,255,255,0.9) ), url(auto.jpg) center no-repeat;
        background-size:cover;
    }
    .container-fluid{
        max-width:900px;
        min-height:600px;
    }
    </style>
</head>
<body>
    <div class="container-fluid jumbotron border">
        <h1 class="text-center">Autókereskedés - Kínálat</h1>
            <div class="row justify-content-center">
                <form method="post">
                    <div class="input-group">
                        <select class="costum-select" name="marka">
                            <option value="0">Válassz márkát....</option>
                                <?=$strOp?>
                        </select>
                        <div class="input-group-append">
                            <input type="submit" class="btn btn-outline-primary" name="szures" value="szűrés">
                        </div>
                    </div>
                </form>
            </div>
        <div class="row justify-content-center">
            <div class="col-auto">
                <table class="table table-responsive table-bordered text-center">
                    <thead class="table-dark">
                        <th>Név</th>
                        <th>Évjárat</th>
                        <th>Ajtokszáma</th>
                        <th>Szín</th>
                    </thead>
                    <tbody>
                        <?=$strSorok?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>