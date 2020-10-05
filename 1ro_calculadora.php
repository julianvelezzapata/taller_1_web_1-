<!DOCTYPE html>
<html lang="en">
<head>
<!--EJERCISIO 1
    Hacer un programa en PHP que permita mostrar en pantalla la
    suma, resta, multiplicación, de dos números enteros almacenados
    en 2, variables diferentes (utilice formularios HTML). -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <a class="navbar-brand disabled" >Calculadora</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" >
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/taller6am/bodytech.php#">Gymnacio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/taller6am/sprint.php#">Sprint step</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/taller6am/postobon.php#">postobon</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/taller6am/bancolombia.php#">bancolombia</a>
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
  <div class="container " >
   <div class="row justify-content-center">
   <div class="col-4">

    <!--el metodo "POST"  envia informacion del formulario HTML al archivo php  y la clase mt-5 es de bootstrap 
      para padding-->
    <form action="1ro_calculadora.php" class="mt-5" method="POST">

        <h1 class="text-center">CALCULADORA</h1>
      <div class="row ">
          <div class="col">
            <input type="text" class="form-control" name="valor1" placeholder="primer numero">
          </div>
          <div class="col">
            <input type="text" class="form-control" name="valor2" placeholder="segundo numero">
          </div>
       </div>
        
        <button type="submit" name="btsumar" class="btn btn-primary mt-5">suma</button>
        <button type="submit" name="btrestar" class="btn btn-secondary mt-5">resta</button>
        <button type="submit" name="btmultiplicar" class="btn btn-success mt-5">multiplicacion</button>
        <button type="submit" name="btdividir" class="btn btn-danger mt-5">Division</button>
    
    </form>
    <div class="container ">
    <h3 class="center-text">
   <?php
/*
  aca mediante un condicional se encierra en inividualmente en las etiquetas de php el condicional para hacer la operacion
  *- el $_POST lo que indica es que se va a usar una clase que mas adelante sera señalada para llevarlo desde el formulario hasta php
  *- el isset lo que hace es confirmar si una variable esta definida
*/
      if(isset($_POST["btsumar"])){

          $valor1=$_POST["valor1"];
          $valor2=$_POST["valor2"];
          

          $total=$valor1 + $valor2;

          echo("el valor de la suma es: ".$total);
        
        }
        ?>

        <?php 
        if(isset($_POST["btrestar"])){

            $valor1=$_POST["valor1"];
            $valor2=$_POST["valor2"];
            
      
            $total=$valor1 - $valor2;
      
            echo("el valor de la resta es: ".$total);
        }
        ?>
        <?php 
        if(isset($_POST["btmultiplicar"])){

            $valor1=$_POST["valor1"];
            $valor2=$_POST["valor2"];
            
      
            $total=$valor1 * $valor2;
      
            echo("el valor de la multiplicacion es: ".$total);
        }
        ?>
        <?php 
        if(isset($_POST["btdividir"])){

            $valor1=$_POST["valor1"];
            $valor2=$_POST["valor2"];
            
      
            $total=$valor1 / $valor2;
      
            echo("el valor de la division es: ".$total);
        }   
      ?>
      </h3>
    </div>
    </div>
    </div>
   </div>


</section>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>