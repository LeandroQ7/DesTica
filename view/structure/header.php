  <!DOCTYPE html>
  <html class="noIE" lang="es-LA">
  <head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="view/img/header/favLogo.png">
    <!-- Author Meta -->
    <meta name="Grupo 6 LEO y ANTHONY" content="colorlib">
    <!-- Meta Description -->
    <meta name="Entrega 3 Proyecto WEB" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Travel</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
      <!--====================CSS bootstrap 4.5.0========================= -->
      <link rel="stylesheet" href="public/css/bootstrap4.5.0/bootstrap.min.css">
      <link rel="stylesheet" href="public/css/bootstrap4.5.0/bootstrap-grid.min.css">
      <link rel="stylesheet" href="public/css/bootstrap4.5.0/bootstrap-reboot.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <!--====================CSS========================= -->
      <link rel="stylesheet" href="public/css/custom.css">
      <link rel="stylesheet" href="public/css/linearicons.css">
      <link rel="stylesheet" href="public/css/font-awesome.min.css">
      <link rel="stylesheet" href="public/css/magnific-popup.css">
      <link rel="stylesheet" href="public/css/jquery-ui.css">        
      <link rel="stylesheet" href="public/css/nice-select.css">              
      <link rel="stylesheet" href="public/css/animate.min.css">
      <link rel="stylesheet" href="public/css/owl.carousel.css">       
      <link rel="stylesheet" href="public/css/main.css">
       <link rel="stylesheet" href="public/css/style.css">

       <?php
session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/
$_SESSION["session"]="guest";
?>
      

    </head>
    <body>  

    	<script>
function myPost() {
  var x = document.getElementById("guestMenu");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}



</script>

      <header id="header">
        <div class="header-top">
          <div class="container">
                            
          </div>
        </div>
        <div class="container main-menu">
          <div class="row align-items-center justify-content-between d-flex">
              <div id="logo">
                <a href="?index"><img src="view/img/logo.png" alt="" title="" /></a>
              </div>
              <nav id="nav-menu-container">
                <ul class="nav-menu" >
                  <li><a href="?index">Inicio</a></li>
                  <li><a href="?destination">Lugares Turísticos</a></li>
                  <li><a href="?interests">Atractivos Recomentados</a></li>
                  <li><a href="?myList">Mis Favoritos</a></li>
                  <li><a href="?opinion">Danos tu opinión</a></li>
                  <li><a href="?about">Acerca de nosotros</a></li>
                  <li><a href="?estimate">Presupuesto</a></li>
                  <li class="btn-primary" id="guestMenu"><a href="?login">Iniciar Sesión</a></li>
                  <li class="btn-danger" id="guestMenu"><a href="?register">Registrarse</a></li>
                  <li class="btn-primary" style="display:none;" id="userMenu"><a href="?logout">Cerrar Sesión</a></li>
                </ul>
              </nav><!-- #nav-menu-container -->                      
          </div>
        </div>
      </header><!-- #header -->
      
        
      <!-- start banner Area -->
      <section class="about-banner relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">       
          <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
              <h1 class="text-white">

					
           
                DesTica       
              </h1> 
            
            </div>  
          </div>
        </div>
      </section>