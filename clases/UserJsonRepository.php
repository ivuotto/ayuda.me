<?php
require_once("UserRepository.php");
require_once("usuario.php");

class UserJsonRepository extends UserRepository{


  //validamos si existe el mail
  public function existeElMail($mail)
  {
    $usuariosArray = $this->getAllUsers();

    foreach ($usuariosArray as $key => $usuario)
    {
      if ($mail == $usuario->getMail())
      {
        return true;
      }
    }

    return false;
  }

  // validamos usuario y clave
  public function usuarioValido($mail, $pass)
	{
		$usuario = $this->getUsuarioByMail($mail);

		if ($usuario) {
			if (password_verify($pass, $usuario->getPassword())) {
				return true;
			}
		}

		return false;
	}

  public function guardarUsuario($miUsuario){
    if ($miUsuario->getId()==null){
      $miUsuario->setId($this->traernuevoId());
    }
    $miUsuarioArray= $this->usuarioToArray($miUsuario);
    $usuarioJson= json_encode($miUsuarioArray);
    file_put_contents("usuarios.json",$usuarioJson.PHP_EOL,FILE_APPEND);
  }
  private function traernuevoId(){
    if(!file_exists("usuarios.json") || filesize("usuarios.json")==0){
      return 1;
    }
    $usuarios= file_get_contents("usuarios.json");
    $usuariosArray = explode(PHP_EOL, $usuarios);
    $ultimoUsuario = $usuariosArray[count($usuariosArray)-2];
    $ultimoUsuarioArray = json_decode($ultimoUsuario,true);
    return $ultimoUsuarioArray["id"] + 1;
  }
  private function usuarioToArray($miUsuario){
    $usuarioArray=[];

    $usuarioArray["nombre"]= $miUsuario->getNombre();
    $usuarioArray["apellido"]=$miUsuario->getApellido();
    $usuarioArray["mail"]=$miUsuario->getMail();
    $usuarioArray["password"]=$miUsuario->getPassword();
    $usuarioArray["id"]=$miUsuario->getId();
    return $usuarioArray;
  }

}
