<html>
  <?php
  require_once 'soporte.php';
  if ($_POST)
    {
    $errores=Validator::validarUsuario($_POST);
    if(empty($errores))
      {
      $usuario = new Usuario($_POST);
      $usuario->setPassword($_POST["password"]);
      $repositorio->getUserRepository()->guardarUsuario($usuario);
      }
    }
  ?>
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
    <title>AYUDA.ME - Registro</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- BOOTSTRAP JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body class="bodyreg">
    <!-- POR COMODIDAD Y ANTE EVENTUALES CAMBIOS LLAMAMOS AL ENCABEZADO -->

    <?php include("navbar.php"); ?>

    <!-- ACA COMIENZA EL CONTENIDO "FUERTE" DE CADA PÁGINA -->
    <div class="container">
      <div class="row">
        <div class="col-xs-10 col-sm-6 col-md-6 col-md-offset-5 col-lg-5 col-lg-offset-6 encabezado fondotransparente">
          <h1 class="h1reg">REGISTRO</h1>
        </div>
        <div class="col-xs-2 col-sm-6 col-md-1 col-lg-1"></div>
      </div>
      <div class="row">
        <div class="col-xs-10 col-sm-6 col-md-5 col-md-offset-6 col-lg-5 col-lg-offset-6 cuerpo fondotransparente">
          <form class="" action="registro.php" method="POST">

            <div id="errores_reg">
              <?php if (!empty($errores)){ ?>
                  <br>
                  <?php foreach ($errores as $error){?>
                    <p>
                      <?php echo $error;?>
                    </p>
                  <?php }} ?>
            </div>

            <div class="boxes_formulario">
              <label for="nombre">NOMBRE</label><br>
            </div>
            <div class="boxes_formulario">
              <input type="text" name="nombre" value="<?php echo(isset($_POST['nombre']) ? $_POST['nombre'] : '') ?>" class="inputs">
            </div>
            <div class="boxes_formulario">
              <label for="apellido">APELLIDO</label><br>
            </div>
            <div class="boxes_formulario">
              <input type="text" name="apellido" value="<?php echo(isset($_POST['apellido']) ? $_POST['apellido'] : '') ?>" class="inputs">
            </div>
            <div class="boxes_formulario">
              <label for="email">E-MAIL</label><br>
            </div>
            <div class="boxes_formulario">
              <input type="mail" name="mail" value="<?php echo(isset($_POST['mail']) ? $_POST['mail'] : '') ?>" class="inputs" id="email_reg">
            </div>
            <div class="boxes_formulario">
              <label for="password">INGRESE UNA CLAVE</label><br>
            </div>
            <div class="boxes_formulario">
              <input type="password" name="password" value="<?php echo(isset($_POST['password']) ? $_POST['password'] : '') ?>" class="inputs">
            </div>
            <div class="boxes_formulario">
              <label for="password">REPITA SU CLAVE</label><br>
            </div>
            <div class="boxes_formulario">
              <input type="password" name="cpassword" value="<?php echo(isset($_POST['cpassword']) ? $_POST['cpassword'] : '') ?>" class="inputs">
            </div>
            <div class="boxes_formulario final">
              <button type="submit" class="btn btn-default navbar-btn" id="enviar">enviar</button>
              <button type="reset" class="btn btn-default navbar-btn">borrar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- FOOTER -->

    <?php include("footer.php"); ?>

  </body>
</html>
