
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LyR Blood Bank ~ Donantes</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="icon" href="../public/logo.png">

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
        height: 5%;
        background-color: red;
    }
</style>

</head>
<body>
  
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #76C0C6;">
  <a class="navbar-brand" href="#"><img src="../public/logo02.png" style="width: 150px; height:60px; " ></a>
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
        <a class="nav-link" href="form1.php">Quiero donar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:#76C0C6;" href="form2.php"  >Donantes</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Quienes Somos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Misión</a>
          <a class="dropdown-item" href="#">Visión</a>
          
          <a class="dropdown-item" href="#">Valores</a>
        </div>
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
    <h1 class="mt-5">Agrega tus datos para conocerte</h1>
    <h3 class="ml-3" style="color: darkgray;">Agenda tu donación</h3>

    <form method="Post" action="../controllers/save.php">
        <div class="row">
        <div class="col">
    <div class="form-group row">
    <label for="name" class="col-sm-4 col-form-label">Nombre y apellido</label>
    <div class="col-sm-7">
      <input type="text" class="form-control"  name="name">
    </div>
    </div>
  
    <div class="form-group row">
    <label for="inputPassword" class="col-sm-4 col-form-label">Fecha de nacimiento</label>
    <div class="col-sm-7">
      <input type="date" class="form-control" id="inputPassword" name="born">
    </div>
  </div>
  <div class="dropdown" style="margin-left: 35%;">
  <select class="btn btn-secondary dropdown-toggle "  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="sexo">
    <option value="Masculino" class="dropdown-item">Masculino</option>
    <option value="Femenino" class="dropdown-item">Femenino</option>
    <option value="Sin especificar" class="dropdown-item">Sin expecificar</option>
  </select>
  
</div>


<div class="form-check mt-2 ml-2">
<div class="form-group row mt-3">
<h5 class="col-sm-5 col-form-label">Has padecido de Covid-19?</h5>
<div class="form-check mt-2">
  <input type="radio" class="form-check-input" name="covid" value="Si" checked id="yes">
  <label for="" class="form-check-label">Sí</label>
</div>
<div class="form-check mt-2 ml-2">
  <input type="radio" class="form-check-input" name="covid" value="No" id="no">
  <label for="" class="form-check-label">No</label>
</div>
  </div>
  </div>
  </div>
  


        
        <!--cOLUMNA DERECHA-->
  <div class="col">
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-4 col-form-label">Cedula de identidad</label>
    <div class="col-sm-8">
      <input type="input" class="form-control" name="cedula">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-4 col-form-label">Número de Teléfono</label>
    <div class="col-sm-8">
      <input type="input" class="form-control" name="telefono">
    </div>
  </div>
  <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label ">Donde recoger</label>
  <div class="dropdown" >
  <select class="btn btn-secondary dropdown-toggle  "  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="recoger">
   
    
    <option value="Bonao" class="dropdown-item">Bonao</option>
    <option value="Santiago" class="dropdown-item">Santiago</option>
    <option value="La vega" class="dropdown-item">La vega</option>
    
  </select>
  
  </div>
  </div>
  
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label">Tipo de sangre</label>
  <div class="dropdown" >
  <select class="btn btn-secondary dropdown-toggle  "  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="sangre">
   
    <option value="O+" class="dropdown-item">O+</option>
    <option value="O-" class="dropdown-item">O-</option>
    <option value="A+" class="dropdown-item">A+</option>
    <option value="A-" class="dropdown-item">A-</option>
    <option value="B+" class="dropdown-item">B+</option>
    <option value="B-" class="dropdown-item">B-</option>
    <option value="AB+" class="dropdown-item">AB+</option>
    <option value="AB-" class="dropdown-item">AB-</option>
  </select>
  
  </div>
  </div>
  </div>
  </div>
  
  <div class="d-flex justify-content-center custom-control custom-checkbox mt-3">
        
            <input type="checkbox" class="custom-control-input" id="customCheck1" name="check" value="si">
            <label class="custom-control-label" for="customCheck1">Los datos proporcionados son correctos?</label>
  </div>
  <div class="d-flex justify-content-center mt-3">
      <input type="submit" class="btn btn-primary" value="Enviar" name="save">
  </div>
    </form>
</div>
<!--footer-->
<div id="footer">
   
</div>
</body>
</html>
