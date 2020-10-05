<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>body-tech</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<header>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <a class="navbar-brand" >Body-tech</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" >
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/taller6am/sprint.php#">Sprint-step</a>
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
<section>
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-4">

        <h2>CALCULO INDICE DE MASA CORPORAL</h2>
        <form action="bodytech.php" class="mt-5" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Peso</label>
            <input type="number" class="form-control" name="valor1" >
            <small  class="form-text text-muted">escriba su peso actual en kgs</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Altura</label>
            <input type="text" class="form-control" name="valor2" >
            <small  class="form-text text-muted">escriba su altura actual en mt</small>
          </div>          
          <button type="submit" class="btn btn-primary mt-5" name="btncalcular">CALCULAR</button>
        </form>
        <h3>
        <?php
          if(isset($_POST["btncalcular"]  )){

            $valor1=$_POST["valor1"];
            $valor2=$_POST["valor2"];
            
            $total=$valor1 / ($valor2 * $valor2);

              switch($total){
                case  ($total < 18.5):
                  echo("el indice de masa corporal es: ".$total . " por lo tanto su peso es insuficiente");
                break;
                case  (($total >= 18.5) &&  ($total <= 24.9)):
                  echo("el indice de masa corporal es: ".$total . " calificacion normopeso");
                break;
                case  (($total >= 25) &&  ($total <= 26.9)):
                  echo("el indice de masa corporal es: ".$total . " calificacion sobrepeso grado1");
                break;
                case  (($total >= 27) &&  ($total <= 29.9)):
                  echo("el indice de masa corporal es: ".$total . " calificacion preobesidad");
                break;
                case  (($total >= 30) &&  ($total <= 34.9)):
                  echo("el indice de masa corporal es: ".$total . "  calificacion obesidad de tipo I");
                break;
                case  (($total >= 35) &&  ($total <= 39.9)):
                  echo("el indice de masa corporal es: ".$total . " calificacion obesidad de tipo II");
                break;
                case  (($total >= 40) &&  ($total <= 49.9)):
                  echo("el indice de masa corporal es: ".$total . " califiacion obesidad morbica");
                break;
                case  ($total >50):
                  echo("el indice de masa corporal es: ".$total . " calificacion obesidad extrema");
                break;
                

            }
          } 


         
        
        ?>
        </h3>s
    </div>
    </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>