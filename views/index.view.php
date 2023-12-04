<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ferreteria Agua y Luz</title>
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/styles.css">
    <script src="https://kit.fontawesome.com/9625ae43cc.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
  </head>
<body>
  <header>
    <nav id="header-nav" class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a href="index.php" class="pull-left visible-md visible-lg">
            <div id="logo-img"></div>
          </a>

          <div class="navbar-brand">
            <a href="index.php"><h1>Ferreteria Agua y Luz</h1></a>
            <p>
              Tenemos todo lo que necesitas!
            </p>
          </div>

          <button id="navbarToggle" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        
        <div id="collapsable-nav" class="collapse navbar-collapse">
           <ul id="nav-list" class="nav navbar-nav navbar-right">
            <li id="navHomeButton" class="visible-xs active">
              <a href="index.html">
                <span class="glyphicon glyphicon-home"></span> Home</a>
            </li>
            <li id="navMenuButton">
              <a href="productos.php" >
                <span class="fa-solid fa-store"></span><br class="hidden-xs"> Productos</a>
            </li>
            <li>
              <a href="contacto.php">
                <span class="fa-solid fa-info"></span><br class="hidden-xs"> Contacto</a>
            </li>
            <li>
              <a href="login.php">
                <span class="fa-regular fa-address-book"></span><br class="hidden-xs"> login</a>
            </li>
            <li id="phone" class="hidden-xs">
              <a href="tel:410-602-5008">
                <span>410-602-5008</span></a><div>Llamanos!</div>
            </li>
          </ul><!-- #nav-list -->
        </div><!-- .collapse .navbar-collapse -->
      </div><!-- .container -->
    </nav><!-- #header-nav -->
  </header>

  <div id="call-btn" class="visible-xs">
    <a class="btn" href="tel:410-602-5008">
    <span class="glyphicon glyphicon-earphone"></span>
    410-602-5008
    </a>
  </div>
  <div id="xs-deliver" class="text-center visible-xs">* We Deliver</div>

  <div id="main-content" class="container">
  <div class="jumbotron">
      <img src="img/ferreteria.jpg" alt="Picture of restaurant" class="img-responsive visible-xs">
    </div>

    <div id="home-tiles" class="row">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <a href="productos.php" ><div id="menu-tile"><span>Productos</span></div></a>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <a href="contacto.php" >
          <div id="specials-tile"><span>Contactanos!</span></div>
        </a>
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12">
        <a href="https://goo.gl/maps/eNHbouHS4gyrK7K98" target="_blank">
          <div id="map-tile">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14897.06991631075!2d-101.28481709218748!3d21.0219809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842b741156867f4f%3A0xfce73e4b0e84307!2sFerreteria%20Agua%20Y%20Luz!5e0!3m2!1ses-419!2smx!4v1653415932341!5m2!1ses-419!2smx"  width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
            <iframe src="" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
            <span>Ubicación</span>
          </div>
        </a>
      </div>
    </div><!-- End of #home-tiles -->
  </div>
  <?php require 'footer.php'; ?>

  <!-- jQuery (Bootstrap JS plugins depend on it) -->
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <script type="text/javascript"
  src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script src="js/carrito.js"></script>
    <script src="js/pedido.js"></script>
 
</body>
</html>