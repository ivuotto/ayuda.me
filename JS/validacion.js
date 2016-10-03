function validarFormulario(){

  var nombre = document.getElementById("nombre").value;
  var apellido = document.getElementById("apellido").value;
  var edad = document.getElementById("edad").value;
  var pass= document.getElementById("pass").value;
  var passconf = document.getElementById("passc").value;
  var email = document.getElementById("email").value;
  var
  if( nombre=="" || nombre.length == 0)
  {
    document.getElementById("errores").innerHTML=+"FALTA INGRESAR SU NOMBRE DE USUARIO <br>";
  }
  else if( apellido == "" || apellido.length == 0 )
  {
    document.getElementById("errores").innerHTML=+"FALTA INGRESAR SU apellido <br>";
    return false;
  }  else if( edad == "" || edad.length == 0 )
    {
      document.getElementById("errores").innerHTML=+"FALTA INGRESAR SU edad <br>";
      return false;
    }
    else if( pass == "" || pass.length == 0 )
    {
      document.getElementById("errores").innerHTML=+"FALTA INGRESAR SU contrasenia <br>";
      return false;
    }
    else if( passconf == "" || passconf.length == 0 )
    {
      document.getElementById("errores").innerHTML=+"FALTA INGRESAR SU 2 cosntrasenia <br>";
      return false;
    }
    else if( email == "" || email.length == 0 )
    {
      document.getElementById("errores").innerHTML=+"FALTA INGRESAR SU email <br>";
      return false;
    }
  else
  {
    crearusuario(nombre, apellido, email,edad,pass);
    return true;
  }
}
function crearusuario(nombre,apellido,email,edad,pass){
  var usuario = "{"+email+","+nombre+","+apellido+","+edad+","+pass+"}"
  console.log(usuario);
}

;
