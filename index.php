<?php 
require 'vendor/autoload.php';
use App\Classes\Calc;

if($_POST){

    $calc = new Calc();
    $result = $calc->sum(1, 2);
    echo "El resultado de sumarlos es :".$result;
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora simple de Suma </title>
</head>
<body>
    <form action="" method="post">
        
    <div class="mb-3">
      <label for="" class="form-label">Valor A:</label>
      <input type="text"
        class="form-control" name="valora" id="valora" aria-describedby="helpId" placeholder="Valor A">
      
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Valor B:</label>
      <input type="text"
        class="form-control" name="valora" id="valorb" aria-describedby="helpId" placeholder="Valor B">
      
    </div>
    
    <input name="" id="" class="btn btn-danger" type="submit" value="Sumar">

    </form>    


</body>
</html>
