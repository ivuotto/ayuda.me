<html>
  <head>
    <!--Llamo todos los estilos -->
    <?php include("llamar_estilos.php") ?>
    
    <title>AYUDA.ME - Preguntas Frecuentes</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- BOOTSTRAP JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body class="bodyfaqs">

      <!-- POR COMODIDAD Y ANTE EVENTUALES CAMBIOS LLAMAMOS AL ENCABEZADO -->
      <?php include("navbar.php"); ?>

      <!-- COLLAPS FAQ -->
      <div class="row">

      <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 encabezado faqsp">

        <h1 class ="titulo"><strong>PREGUNTAS FRECUENTES</strong></h1>

        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

          <div class="panel panel-default">

            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  1. ¿Cómo me registro en <strong>AYUDA.ME</strong>?
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
                Ingresa a nuestro sitio y selecciona <strong>"REGISTRO"</strong>, decidí que papel vas a ocupar, el de trabajador, el de recomendador o el de solicitante de trabajo y completá tus datos.
              </div>
            </div>

          </div>

          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  2. ¿Cómo busco trabajo?
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">
                Ingresa a <strong>"EMPLEOS"</strong> y postulate paar los que sientas que son posibles de realizar con tus conocimientos.
              </div>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  3. ¿Si selecciono un trabajo automaticamente quedo asignado al mismo?
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-body">
                No, tenes que esperar la respuesta de la persona que ofrece el mismo.
              </div>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  4. No puedo ingresar a mi cuenta / olvidé mi contraseña.
                </a>
              </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
              <div class="panel-body">
                Seleccioná el link de <strong>"OLVIDE MI CONTRASEÑA"</strong> y seguí los pasos.
              </div>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFive">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  5. ¿Qué tipo de trabajo puedo pedir / conseguir?
                </a>
              </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
              <div class="panel-body">
                Cualquier tipo de trabajo.
              </div>
            </div>
          </div>

        </div>

      </div>
      </div>

      <!-- FOOTER -->

      <?php include("footer.php"); ?>

  </body>
</html>
