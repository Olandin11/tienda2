<?php require 'header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ferreteria</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/skeleton.css">
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/custom.css">

    

</head>
<body >



   

   

    <div id="lista-cursos" class="contenedor">
        <h1 id="encabezado" class="encabezado">Productos a la venta</h1>   

         <div class="row">
            <?php foreach($productos as $producto): ?>
            <div class="col-sm-4 columna">
                <div class="card">
                    <img src="./imagenes/<?php echo $producto['Foto']; ?>" alt="<?php echo $producto['Nombre'] ?>" class="imagen-curso u-full-width" width="100" height="185" >
                    
                    <div class="info-card">
                        <h4 ><a href="single.php?id=<?php echo $producto['Codigo_barras']; ?>" class="lin"><?php echo $producto['Nombre'] ?></a></h4>
                        <p><?php echo $producto['Marca'] ?></p>
                       
                        <p class="precio">$<span class=""><?php echo $producto['Precio_venta'] ?></span></p>
                        <p class="unidades">Unidades disponibles: <?php echo $producto['Unidades'] ?></p>

                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="<?php echo $producto['id']; ?>">Agregar Al Carrito</a>
                    </div>
                </div> <!--.card-->
            </div>
            <?php endforeach; ?>
         </div>  <!--.row-->
         
             <?php require 'paginacion.php'; ?>
         
        
    </div>  
    
    <?php require 'footer.php'; ?>
   
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <script type="text/javascript"
  src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script src="js/carrito.js"></script>
    <script src="js/pedido.js"></script>

</body>
</html>
 

