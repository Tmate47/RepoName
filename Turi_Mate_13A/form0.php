<?php
print_r($_POST);
$ev=$email=

if(isset($_POST['elkuld'])){
  
  $ev=$_POST["SzEv"];
  //email:
  $email=$_POST['email'];
  

  $msg="az adatok el lettek küldve";
}
function fcSel($kivalasztottOpcio,$val){
return trim($kivalasztottOpcio)==trim($val) ? "selected" : "";
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

  <script src="form0.js"></script>
	
    <title>Form validalas</title>
</head>
<body>
    <div class="container border bg-light">
    <div class="row justify-content-center"><div class="col-8">

    <ul id="hibalista"></ul>

    <form class="p-5">
        <div class="form-group row">
          <label class="col-3 text-right" for="szEv">Szuletesi ev</label>
          <div class="col-5">
               <input type="number" class="form-control" id="szEv" name="SzEv" min="1920" max="2050" >
          </div>
          <div class="col-3" id="eletkor">... eves vagy</div>
        </div>
        
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
        </div>

        <div class="form-group">
          <label for="passw">Password</label>
          <input type="password" class="form-control" id="passw" placeholder="Password">
        </div>

        <div class="form-group">
            <label for="sel">Erdeklodesi korod</label>
            <select class="form-control" id="sel" name="sel">
              <option value="0">valassz egyet</option>
              <option value="1">foci</option>
              <option value="2">rajzolas</option>
              <option value="3">informatika</option>
              <option value="4">mas</option>
            </select>
          </div>

          <div class="form-group">
            <label>Add meg a bankkartyad szamat:</label>
            <input name="card"  type="text" size="4" tabindex="1" maxlength="4" > 
            <input  name="card" type="text" size="4" tabindex="2" maxlength="4" > 
            <input  name="card" type="text" size="4" tabindex="3" maxlength="4" >
            <input   name="card" type="text" size="4" tabindex="4" maxlength="4" >
          </div>


          <div class="form-group">
            <label for="pont">Hogyan ertekeled a megvasarolt termeket minosegi szempontbol (0 - 10) ?</label>
            <input type="range" class="form-control-range" id="pont" name="pont" min="0" max="10" step="1" value="0" >
            <output id="pontErtek">0</output>
          </div>

          <div class="form-group">
            <div class="form-check form-check-inline">Milyen nyelvet/nyelveket szeretnel tanulni?</div>
                    <label  >francia</label>
                    <input  type="checkbox" name="nyelv[]" value="francia">
                    <label  >nemet</label>
                    <input  type="checkbox" name="nyelv[]"  value="nemet">
                    <label  >angol</label>
                    <input  type="checkbox" name="nyelv[]"  value="angol">
        </div> 

        <div class="form-group">
            <div class="form-check form-check-inline">Melyik kategoriaba tartozol?</div>
                <label >diak</label>
                <input  type="radio" name="kateg"  value="diak">
                <label ></label>tanar</label>
                <input  type="radio" name="kateg"  value="tanar">
                <label >szulo </label>
                <input  type="radio" name="kateg" i value="szulo" >           
        </div>

       
        <button id="elkuld" name="" class="btn btn-primary">Submit</button>
      </form>
      <hr>
      <ul id="adatok"></ul>
      
    </div>
    
  </div>
</div>
</body>
</html>