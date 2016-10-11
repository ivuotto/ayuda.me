<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- FUENTE DE GOOGLE -->
    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <!-- HOJA DE ESTILOS PROPIA -->
    <link rel="stylesheet" href="css/styles.css">
    <title>AYUDA.ME - Ingreso</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- BOOTSTRAP JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body class="bodylogin">

    <!-- POR COMODIDAD Y ANTE EVENTUALES CAMBIOS LLAMAMOS AL ENCABEZADO -->
    <?php include("navbar.php"); ?>

      <!-- ACA COMIENZA EL CONTENIDO "FUERTE" DE CADA PÁGINA -->
    <div class="container">
      <div class="row">
        <div class="col-xs-10 col-sm-6 col-md-5 col-lg-4 encabezado fondotransparente">
          <h1>INGRESO</h1>
        </div>
        <div class="col-xs-2 col-sm-6 col-md-7 col-lg-8"></div>
      </div>
      <div class="row">
        <div class="col-xs-10 col-sm-7 col-md-5 col-lg-4 cuerpo fondotransparente">
          <form class="" action="" method="GET">
            <div class="boxes_formulario">
              <label id="errores"></label>
            </div>
            <div class="boxes_formulario">
              <label for="usuario">USUARIO</label><br>
            </div>
            <div class="boxes_formulario">
              <input type="text" name="usuario_login" value="" class="inputs" id="usuario_login">
            </div>
            <div class="boxes_formulario">
              <label for="password">CLAVE</label><br>
            </div>
            <div class="boxes_formulario">
              <input type="password" name="password" value="" class="inputs" id="password_login">
            </div>
            <div class="boxes_formulario espaciado">
              <button type="button" class="btn btn-default navbar-btn" id="enviar" onclick="return ejecucion();">enviar</button>
              <button type="reset" class="btn btn-default navbar-btn">borrar</button>
            </div>
          </form>
        </div>
        <div class="col-xs-2 col-sm-6 col-md-7 col-lg-8"></div>
      </div>
    </div>
    <!-- FOOTER -->

    <?php include("footer.php"); ?>

  </body>
</html>
