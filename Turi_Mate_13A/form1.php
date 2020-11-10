<?php
    include "Adat.class.php";

    if(isset($_POST['elkuld'])){
        $email=$_POST['email']
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" />
    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>

    <script src="form1.js"></script>

    <title>Form validalas</title>
</head>

<body>
    <div class="container border bg-light">
        <div class="row justify-content-center">
            <div class="col-8">

                <ul id="hibalista"></ul>

                <form class="p-5" action="" method="post">
                    <div class="form-group">
                        <label for="email">Email cim</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">

                    </div>

                    <div class="form-group">
                        <label for="sel">Milyen nyelvet szeretnel tanulni?</label>
                        <select class="form-control" id="sel" >
                            <option value="0">valassz egyet</option>
                            <option value="1">angol</option>
                            <option value="2">francia</option>
                            <option value="3">nemet</option>
                            <option value="4">kinai</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <div class="form-check form-check-inline">Mikor tudnal resztvenni az eloadasokon?</div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="mikor[]" value="delelott">
                            <label class="form-check-label">delelott</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="mikor[]" value="delutan">
                            <label class="form-check-label">delutan</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="mikor[]" value="este">
                            <label class="form-check-label">este</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-check form-check-inline">Melyik kategoriaba tartozol?</div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kategoria"  value="diak">
                            <label class="form-check-label" for="inlineRadio1">diak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kategoria" value="tanar">
                            <label class="form-check-label" for="inlineRadio2">alkalmazott</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kategoria" value="munkanelkuli">
                            <label class="form-check-label" for="inlineRadio3">munkanelkuli</label>
                        </div>
                    </div>


                    <button id="elkuld" type="elkuld" class="btn btn-primary" >Submit</button>
                </form>
                <hr>

            </div>

        </div>
    </div>
</body>

</html>