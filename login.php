<?php
	require_once("soporte.php");

	if ($auth->estaLogueado())
	{
		header("location:index.php");exit;
	}

	if ($_POST)
	{
		//Sé que llegó acá tras haber enviado el form

		$errores = $validar->validarLogin($_POST);

		if (empty($errores))
		{

			// Loguearlo
			$usuario = $repositorio->getUserRepository()->getUsuarioByMail($_POST["mail"]);

			$auth->loguear($usuario);

			// Si me puso que lo recuerde, recordarlo
			if (isset($_POST["recordame"])) {
				//recordarlo
				setcookie("usuarioLogueado", $usuario->getId(), time() + 60 * 60 * 24 * 3);
			}

			// Redirigirlo
			header("location:index.php");exit;
		}
	}
?>



<html>
  <head>
    <!--Llamo todos los estilos -->
    <?php include("llamar_estilos.php") ?>

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
          <form class="" action="" method="POST">
            <div class="boxes_formulario">
              <label id="errores"></label>
            </div>
            <div class="boxes_formulario">
              <label for="usuario">EMAIL | USUARIO</label><br>
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

						<!-- agregando boton de recuérdame -->
						<div class="boxes_formulario">
             	<label for="usuario">Recordar Usuario</label>
             	<input type="checkbox" name="recordame"></input>
           	</div>

            <div class="boxes_formulario espaciado">
              <button type="submit" class="btn btn-default navbar-btn" id="submit" value="Enviar" onclick="return ejecucion();">enviar</button>
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
