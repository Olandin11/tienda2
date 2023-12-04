    <link rel="stylesheet" href="<?php echo RUTA; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/styles.css">
    <script src="https://kit.fontawesome.com/9625ae43cc.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
           <div id="nav-list" class="nav navbar-nav navbar-right">
                <ul>
                    <li class="submenu">
                            <img src="img/cart.png" id="img-carrito">
                            <div id="carrito">
                                    
                                    <table id="lista-carrito" class="u-full-width">
                                        <thead>
                                            <tr>
                                                <th>Imagen</th>
                                                <th>Nombre</th>
                                                <th>Precio</th>
                                                <th>Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>

                                    <a href="#" id="vaciar-carrito" class="button u-full-width">Vaciar Carrito</a>
                                    <a href="#" id="procesar-pedido" class="button u-full-width">Ver carrito</a>
                            </div>
                    </li>
                </ul>
            </div>    
            <li id="navHomeButton" class="visible-xs active">
              <a href="index.html">
                <span class="glyphicon glyphicon-home"></span> Home</a>
            </li>
            <li>
              <a href="contacto.php">
                <span class="fa-solid fa-info"></span><br class="hidden-xs"> Contacto</a>
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
