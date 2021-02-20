
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LyR Blood Bank</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="">

<style>
    #instagram{
        color: #8A2387;  /* fallback for old browsers */
color: -webkit-linear-gradient(to right, #F27121, #E94057, #8A2387);  /* Chrome 10-25, Safari 5.1-6 */
color: linear-gradient(to right, #F27121, #E94057, #8A2387); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }

    #footer{
        width: 100%;
        float: left;
        position: fixed;
        bottom: 0;
        z-index: 999999;
        height: 75px;
        background-color: red;
    }
</style>

</head>
<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #76C0C6;">
  <a class="navbar-brand" href="index1.php"><img src="../public/logo02.png" style="width: 150px; height:60px; " ></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" style="margin-left: 50%;" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:#76C0C6;" href="form1.php">Quiero donar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="form2.php">Donantes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="historia.php"> Quienes somos</a>
        </li>
      
    </ul>
    
    <div class="mr-5 d-flex justify-content-center">
       <h2><a href="" class="icon-facebook mr-2"></a></h2> 
       <h2><a href="" class="icon-instagram" id="instagram"></a></h2> 
    </div>
  </div>


</nav> 



<!--Formulario-->
<div class="container">
    <h1 class="mt-5">Agrega tus datos de donación</h1>
    <h3 class="ml-3" style="color: darkgray;">Agenda tu donación</h3>

    <form>
        <div class="row">
        <div class="col">
    <div class="form-group row">
    <label for="staticEmail" class="col-sm-4 col-form-label">Nombre y apellido</label>
    <div class="col-sm-7">
      <input type="text" class="form-control"  >
    </div>
    </div>
    <div class="form-group row">
    <label for="staticEmail" class="col-sm-4 col-form-label">Numero de telefono</label>
    <div class="col-sm-7">
      <input type="text" class="form-control"  >
    </div>
    </div>
    <div class="form-group row">
    <label for="inputPassword" class="col-sm-4 col-form-label">Fecha de nacimiento</label>
    <div class="col-sm-7">
      <input type="date" class="form-control" id="inputPassword">
    </div>
  </div>
  <div class="dropdown" style="margin-left: 35%;">
  <select class="btn btn-secondary dropdown-toggle "  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" value="sexo">
    <option value="Masculino" class="dropdown-item">Masculino</option>
    <option value="Femenino" class="dropdown-item">Femenino</option>
    <option value="Sin_especificar" class="dropdown-item">Sin expecificar</option>
  </select>
  
</div>
    <div class="form-group row">
    <h5 class="col-from-label "style="margin-top: 7%;" >Has padecido de COVID-19?</h5>
    <div class="form-check "style="margin-top: 8%;">
      <input type="radio" class="from-check-input" name="covid" value="Si" checked id="yes">
      <label for="" class="form-check-label">Si</label>
    <div class="form-check  ml-5" style="margin-top: -25%;">
      <input type="radio" class="form-check-input" name="covid" value="No" checked id ="no">
      <label for="" class="form-check-label">No</label>
   
  </div>
</div>
  </div>
        </div>
        <!-- COLUMNA DERECHA-->
  <div class="col">
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-4 col-form-label">Cedula de identidad</label>
    <div class="col-sm-7">
      <input type="input" class="form-control" id="inputPassword">
    </div>
  </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label">Tipo de sangre</label>
  <div class="dropdown" >
  <select class="btn btn-secondary dropdown-toggle "  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" value="Tipo de sangre">
   
    <option value="O+" class="dropdown-item">O+</option>
    <option value="O-" class="dropdown-item">O-</option>
    <option value="A+" class="dropdown-item">A+</option>
    <option value="A-" class="dropdown-item">A-</option>
    <option value="LL" class="dropdown-item">Sin expecificar</option>
    <option value="O-" class="dropdown-item">Sin expecificar</option>
  </select>
  </div>
  </div>
  </div>
  </div>
  <div class="d-flex justify-content-center custom-control custom-checkbox mt-5">
        
            <input type="checkbox" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="customCheck1">Los datos proporcionados son correctos?</label>
  </div>
  <div class="d-flex justify-content-center mt-2">
      <input type="submit" class="btn btn-primary"  value="Enviar" >
      
  </div>
    </form>
</div>
<!--footer-->


</body>
</html>