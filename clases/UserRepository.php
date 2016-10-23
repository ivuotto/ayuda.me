<?php
require_once("usuario.php");
abstract class UserRepository{
  abstract public function guardarUsuario($miUsuario);

  abstract public function existeElMail($mail);
  abstract public function usuarioValido($mail, $password);

}
