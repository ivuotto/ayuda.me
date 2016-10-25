<?php

class Validator
{
    private function __construct()
      {

      }
    public static function validarUsuario($miUsuario)
    {
      $errores=[];

      if (trim($miUsuario["nombre"])== "") {
        $errores[] = "Por favor ingrese su nombre";
      }
      if (trim($miUsuario["apellido"])== "") {
        $errores[] = "Por favor ingrese su apellido";
      }
      if (trim($miUsuario["password"])== "") {
        $errores[] = "Por favor ingrese una contraseña";
      }
      if (trim($miUsuario["cpassword"])== "") {
        $errores[] = "Por favor confirme su contraseña";
      }
      if($miUsuario["cpassword"]!==$miUsuario["password"]){
        $errores[]= "Sus contraseñas nos coinciden";
      }
      if (trim($miUsuario["mail"])== "") {
        $errores[] = "Por favor ingrese un email";
      }
      if (!filter_var($miUsuario["mail"], FILTER_VALIDATE_EMAIL)) {
        $errores[] = "Por favor ingrese un email válido";
      }
      return $errores;
    }

  //Estoy agregando la función pública validarLogin.
  //Tengo que usar los métodos existeElMail y usuarioValido (así que la creo en userJasnRepository.php)


  public function validarLogin()

  {
      $errores = [];

      if (trim($_POST["nombre"]) == "")
      {
        $errores = "Por favor, completá su nombre!";
      } elseif (!$this->UserRepository->existeElMail($_POST["mail"]))
      {
        $errores = "El mail no existe";
      } elseif (!$this->UserRepository->usuarioValido($_POST["mail"], ["password"]))
      {
        $errores = "El usuario no es válido";
      }

      if (trim($_POST["password"]) == "") {
      $errores[] = "por favor, completá la contraseña";
    }
      return $errores;
  }
}

?>
