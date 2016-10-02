function ejecucion()
{
  document.getElementById("errores").innerHTML = "";

  //Selecciono por ID los campos a validar
  usuario = document.getElementById("usuario_login").value;
  clave = document.getElementById("password_login").value;

  //Creo array para traer errores
  ierrores = [];

  //Comienzo las validaciones, cada una con un IF porque sino corta la validación.

  if( usuario == 0 || usuario == "" )
  {
    ierrores.push("INGRESE SU USUARIO");
  }
  if( clave == 0 || clave == "" )
  {
    ierrores.push("INGRESE SU CLAVE");
  }
  //Si la posición 0 del array de errores no está definida es que no hay errores y redirigimos a la página de éxito
  if(ierrores[0] == undefined)
  {
    location.href = "exito.html";
    //return true;
  //Si tiene errores los carga en el array
  }
  else
  {
  ierrores.forEach(function(error)
    {
      document.getElementById('errores').innerHTML += error+".<br>";
    })
  }
}
