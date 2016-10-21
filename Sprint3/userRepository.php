<?php

require_once("usuario.php");
//clase abstracta donde luego la extenderemos para definir userJsonRepository
//especificanto que ultizaremos un JSON
abstract class UserRepository {

	abstract public function existeElMail($mail);

	abstract public function guardarUsuario(Usuario $miUsuario);
}
