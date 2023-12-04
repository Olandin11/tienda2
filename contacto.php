
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">


    <title>Contacto</title>
    <style>
        #feedback {
            font-size: 1.4em;
        }

        #selectable .ui-selecting {
            background: #7DCEA0;
        }

        #selectable .ui-selected {
            background: #27AE60;
            color: black;
        }

        #selectable {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 60%;
            height: 98px;
        }

        #selectable li {
            margin: 3px;
            padding: 0.4em;
            font-size: 1.4em;
            height: 38px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#selectable").selectable();
        });
    </script>
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

        </div>
        
        
      </div><!-- .container -->
    </nav><!-- #header-nav -->
  </header>

    
    <br><br>
    <div class="container">
        <h2>Usos del jquery UI</h2>
        <form class="row g-3 needs-validation" action="enviar.php" method="POST">
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="validationCustom01" value="Carlos" name ="nombre" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="validationCustom02" value="Palafox" name="apellido" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Correo</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" class="form-control" name="username" id="validationCustomUsername"
                        aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom03" class="form-label">Ciudad</label>
                <input type="text" class="form-control" name="ciudad" id="validationCustom03" required>
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustom04" class="form-label">Estado</label>
                <select class="form-select" name="estado" id="validationCustom04" required>
                    <option selected disabled value="">Selecciona...</option>
                    <option>Guanajuato</option>
                    <option>Michoacan</option>
                    <option>Jalisco</option>
                    <option>Queretaro</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid state.
                </div>
            </div>

            <div class="col-md-3">
                <label for="validationCustom05" class="form-label">Numero de Control</label>
                <input type="text" class="form-control" id="numcontrol" id="validationCustom05" name="numcontrol" required>
                <div class="invalid-feedback">
                    Please provide a valid zip.
                </div>
            </div>
           

            <div class="col-12 text-center">
                <button class="btn btn-primary" type="submit">Enviar Formulario</button>
            </div>
             <div class="container-sm text-center">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check -label" for="invalidCheck">Acepto terminos y condiciones</label>
                    <div class="invalid-feedback">You must agree before submitting.</div>
                </div>
            </div>
        </form>
    </div>

</body>
  <script>
    $(document).ready(function() {
        $("#selectable").selectable({
            stop:function(){
            var selected = $(".ui-selected", this).map(function(){
                    return $(this).text();
                }).get();
                $("#selectedItems").val(selected.join(","));
            }
        });
        $("form").submit(function(e){
            e.preventDefault();
            $.ajax({
                url: "enviar.php",
                method: "POST",
                data: $(this).serialize(),
                success: function(response){
                    console.log(response);
                }
            });
        });
    });
        


</script>




</html>