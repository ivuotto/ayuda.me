<html>
  <head>
    <meta charset="utf-8">
    <!-- BOOTSTRAP -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- FUENTE DE GOOGLE -->
    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <!-- HOJA DE ESTILOS PROPIA -->
    <link rel="stylesheet" href="css/styles.css">
    <title>AYUDA.ME - Todos necesitamos una mano</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- BOOTSTRAP JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body class="bodyindex">
    <!-- ENCABEZADO CON NAVBAR -->

    <!-- POR COMODIDAD Y ANTE EVENTUALES CAMBIOS LLAMAMOS AL ENCABEZADO -->
    <?php include("navbar.php"); ?>

    <!-- ACA COMIENZA EL CONTENIDO "FUERTE" DE CADA PÁGINA -->
      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-2 col-lg-6 col-lg-offset-2 leyenda">
           <h2><b>AYUDA.ME</b> es la Red Social para <b>AYUDAR</b> a los que nos rodean.</h2>
        </div>
      </div>
      <div class="row">
          <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-4 col-lg-6 col-lg-offset-4 leyenda">
              <p class="con col-xs-offset-1t fondeado">
                Recomienda un conocido o un amigo o simplemente aquella persona que ha realizado ese trabajo para ti y te gustaría que otros lo contraten.
              </p>
          </div>
      </div>

      <div class="row">
        <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
          <a href="#" class="btn btn-info h2">Necesito trabajar</a>
          <a href="#" class="btn btn-success h2">Recomendar trabajador</a>
        </div>
      </div>
      <div class="row contenidop">
        <div class="col-xs-8 col-sm-8 col-md-3 col-lg-4">
          <h3>Quiero ofrecer trabajo</h3>
          <p>
            Recomienda un conocido o un amigo o simplemente aquella persona que ha realizado ese trabajo<br>para ti y te gustaría que otros lo contraten.
          </p>
          <a href="#" class="btn btn-info">Ofrecer trabajo</a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
          <h3>Necesito trabajar</h3>
          <p>
            Recomienda un conocido o un amigo o simplemente aquella persona que ha realizado ese trabajo<br>para ti y te gustaría que otros lo contraten.
          </p>
          <a href="#" class="btn btn-info">Necesito trabajar</a>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-3 col-lg-4">
          <h3>Recomendar trabajador</h3>
          <p>
            Recomienda un conocido o un amigo o simplemente aquella persona que ha realizado ese trabajo<br>para ti y te gustaría que otros lo contraten.
          </p>
          <a href="#" class="btn btn-info">Recomendar trabajador</a>
        </div>
      </div>

      <!-- FOOTER -->

      <?php include("footer.php"); ?>

  </body>
</html>
