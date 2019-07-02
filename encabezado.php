<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Encabezado </title>
  <?php INCLUDE ("formato.php"); ?>
</head>

<body>
 
<div class="container-fluid header-inst">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand d-flex flex-wrap" href="http://www.diariosobrediarios.com.ar"><div class="d-md-none d-flex flex-wrap">Diario Sobre Diarios</div><img src="icon2.png" alt=""></a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
    <a class="nav-link" href="institucional.php">Institucional</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="comercial.php">Comercial</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="provinciales.php">DsD Provinciales</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="cartas.php">Cartas al DsD</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="contacto.php">Contacto</a>
  </li>
    </ul>

    <div class="social mr-5">

    <a href="https://www.facebook.com/dsdiarios/" target="_blank"><i class="fab fa-2x fa-facebook"></i></a>

    <a href="https://twitter.com/DsDiarios" target="_blank"><i class="fab fa-2x fa-twitter"></i></a>

    <a href="https://www.instagram.com/DsDiarios/" target="_blank"><i class="fab fa-2x fa-instagram"></i></a>

    <a href="https://ar.pinterest.com/eldsd/" target="_blank"><i class="fab fa-2x fa-pinterest"></i></a>

    <a href="mailto:info@dsd.com" target="_top"><i class="far fa-2x fa-envelope"></i></a>

    <a href="https://www.youtube.com/user/DiarioSobreDiarios?feature=watch" target="_blank" role="button">
    <i class="fab fa-2x fa-youtube"></i></a>
        
      </div>
    


    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar en el sitio" aria-label="Search">
      <button class="btn btn-outline-info my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
    </form>
  </div>
</nav>

</div>


                                  <!--HEADER CLIMA LOGO FECHA -->

<header class="container-fluid encabezado shadow">

  <div class="row">

    <div class="d-none d-md-block col-lg-4 col-md-12">
      <div class="clima justify-content-center">
<a class="weatherwidget-io" href="https://forecast7.com/es/n34d60n58d38/buenos-aires/" data-label_1="Buenos Aires" data-label_2="Argentina" data-font="Roboto" data-icons="Climacons Animated" data-mode="Current" data-days="2" data-theme="pure" >Buenos Aires Argentina</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
</div>


    </div>
  
    <div class="d-none d-md-flex col-lg-4 col-md-12 logo align-items-center justify-content-center">
          <a href="index.php"><img src="img/logo-blanco4.png" alt=""></a>
        </div>

          
  <div class="d-none d-md-block col-lg-4 col-md-12">
    <div class="fecha">
        <p class="text-right">Año X - N° 5297</p>

        <p class="text-right"><?php INCLUDE ("fecha.php")?></p><p class="text-right"><?php echo date("Y"); ?></p>


      </div>

    </div>

    </div>
  </div>

</div>
</div>


                                    <!--MENU DE SECCIONES -->

</header>

<nav class="container secciones shadow">
  <ul class="nav nav-justified justify-content-center">
  <li class="btn nav-item rounded botonefect matinal">
    <a class="nav-link text-white" href="matinal.php">Matinal</a>
  </li>
  <li class="btn nav-item rounded botonefect ahora">
    <a class="nav-link text-white" href="ahora.php">Ahora</a>
  </li>
  <li class="btn nav-item rounded botonefect medios">
    <a class="nav-link text-white" href="medios.php">Medios</a>
  </li>
  <li class="btn nav-item rounded botonefect zonadura">
    <a class="nav-link text-white" href="zonadura.php">Zona Dura</a>
  </li>
  <li class="btn nav-item rounded botonefect publicaciones">
    <a class="nav-link text-white" href="publicaciones.php">Publicaciones</a>
  </li>
</ul>
</nav>

</body>
</html>