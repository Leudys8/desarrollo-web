<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LyR Blood Banks</title>
    <!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

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

<nav class="navbar navbar-expand-lg navbar-light bg-light" >

<!-- Just an image -->
<nav class="navbar navbar-light">
  <a class="navbar-brand" href="index.php">
    <img src="../public/logo02.png" width="130" height="50" alt="" loading="lazy">
  </a>
</nav>
  
  

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" style = "margin-left: 50%" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php" style="color: #33D7FF;">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="form1.php">Quiero donar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="form2.php">Donantes </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contactos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="https://www.facebook.com/richard0985">Facebook</a>
          <a class="dropdown-item" href="https://www.instagram.com/richardx0330/?hl=es-la">Instagram</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Gmail</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="historia.php" >Quienes somos</a>
      </li>
    </ul>
    
    
  </div>
  </nav>
  

  <!--Carusel-->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner" id="carousel" style="max-height: 400px;">
    <div class="carousel-item active">
      <img src="../public/03.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../public/02.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../public/01.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../public/logo02.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 
<!--cards-->
<div class="container">
<div class="row mt-5">
  <div class="card col-sm-7" style=" width: 12rem;">
    <div class="card-body">
      <h5 class="card-title">Por qué donar?</h5>
      <p class="card-text">Ya que usted tuvo esta infección, su plasma ahora contiene anticuerpos del COVID-19. Estos anticuerpos proporcionaron una forma para que su sistema inmunológico combatiera el virus cuando estaba enfermo. Por esta razón, su plasma podría usarse para ayudar a otros a combatir la enfermedad.</p>
    </div>
  </div>
  <div class="col-5 ">
    <img src="../public/blood.jpg" alt="blodd" class="card-img">
  </div>
</div>
<div class="row mt-5">
<div class="col-5 ">
    <img src="../public/blood01.jpg" alt="blodd" class="card-img">
  </div>

  <div class="card col-sm-7" style=" width: 12rem;">
    <div class="card-body">
      <h5 class="card-title">Por qué donar?</h5>
      <p class="card-text">
Donar sangre es donar vida, pues las transfusiones no solo forman parte del tratamiento de determinadas enfermedades, sino también a salvar vidas ante situaciones médicas de extrema gravedad, como en caso de hemorragias por accidentes de tráfico, por poner un ejemplo sencillo.</p>
    </div>
  </div>
</div>

<!--Misioon, vision, valores-->
<div class="row mt-5 d-flex justify-content-between">
  <div class="col-3">
    <div class="card">
      <img src="../public/mision.png" alt="" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Misión</h5>
        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto quod eligendi nam culpa placeat velit. Quaerat mollitia corporis fugit odio soluta culpa. Velit amet placeat, neque nihil molestias praesentium accusamus!</p>
        <a href="" class="card-link">Ver más...</a>
      </div>
    </div>
  </div>
  <div class="col-3">
    <div class="card">
      <img src="../public/vision.png" alt="" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Visión</h5>
        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas ab soluta sequi autem quod vitae suscipit est, saepe in. Consequuntur deserunt doloremque pariatur eveniet dolore incidunt nisi nulla molestiae maxime.</p>
        <a href="historia.php" class="card-link">Ver más...</a>
      </div>
    </div>
  </div>
  <div class="col-3">
    <div class="card">
      <img src="../public/values.png" alt="" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Valores</h5>
        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium asperiores quidem voluptates exercitationem, illo enim ipsum laboriosam magni corporis repudiandae,</p>
        <a href="historia.php" class="card-link">Ver más...</a>
      </div>
    </div>
  </div>
</div>
</div>


</body>
</html>