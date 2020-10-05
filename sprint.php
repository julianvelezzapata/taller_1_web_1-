<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sprint step</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<header>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <a class="navbar-brand" >sprint step</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" >
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/taller6am/bodytech.php#">body tech</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/taller6am/postobon.php#">postobon</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/taller6am/bancolombia.php#">bancolombia</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/taller6am/1ro_calculadora.php#">calculadora</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</header>
<br><br>
<section >
<div class="container">
    <div class="row justify-content-center">
    <div class="col-4">
    <div class="card" style="width: 18rem;">
  <img src="imagenes/zapatos.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">step</h5>
    <p class="card-text">tenis con luces para niño marca step</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">par de zapatos a a 80,000</li>
    <li class="list-group-item">Si son 3 pares se les dará un 10% de descuento al cliente
sobre el total de la compra</li>
    <li class="list-group-item">Si el número de zapatos es mayor 3 pares, pero menor o
igual de 8 pares, se le otorga un 20% de descuento
</li>
<li class="list-group-item">si son más 8 pares de zapatos se otorgará un 50% de
descuento</li>
  </ul>
  <div class="card-body">
  <form action="sprint.php" class="mt-5" method="POST">
          <div class="form-group">
            <label >numero de pares que necesita</label>
            <input type="text" class="form-control" name="valor" >         
          </div>                  
          <button type="submit" class="btn btn-primary mt-5" name="btncalcularprecio">CALCULAR costo</button>
        </form>
  </div>
</div>
     </div>
  </div>
</div>
<?php
          if(isset($_POST["btncalcularprecio"]  )){

            $valor=$_POST["valor"];

              switch($valor){
                case (($valor < 3) && ($valor >= 1)):
                  $total=($valor * 80000);
                  echo("el total es: ". $total );
                break;
                case  ($valor = 3):
                  $total=($valor * 80000) * 0.10;
                  echo("el valor de los zapatos con descuentos del 10% es: ".$total);
                break;
                case (($valor > 3) &&  ($valor < 8)):
                  $total=($valor * 80000) * 0.20;
                  echo("el valor de los zapatos con descuentos del 20% es: ".$total);
                break;
                case  ($valor >= 8) :
                  $total=($valor * 80000) * 0.50;
                  echo("el valor de los zapatos con descuentos  del 50% es: ".$total);
                break;                
                case  ($valor <= 0):
                  echo("escoja una cantidad valida");
                break;
            }
          } 
        ?>


   
</section>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>