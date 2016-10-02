function validarFormulario(){

  var nombre = document.getElementById("nombre").value;
  var apellido = document.getElementById("apellido").value;

  if( nombre=="" || nombre.length == 0)
  {
    document.getElementById("errores").innerHTML="FALTA INGRESAR SU NOMBRE DE USUARIO <br>";
  }
  else if( apellido == "" || apellido.length == 0 )
  {
    document.getElementById("errores").innerHTML="FALTA INGRESAR SU apellido <br>";
    return false;
  }
  else
  {
    return true;
  }
};
