<?php

require_once("userRepository.php");
//
class Auth {

    private $userRepository;

	private static $instance = null;
//definimos la funcion que nos va a comenzar la session.
	public static function getInstance(UserRepository $userRepository)
    {
        if (Auth::$instance === null) {
            session_start();
            Auth::$instance = new Auth();
            Auth::$instance->setUserRepository($userRepository);
            Auth::$instance->checkLogin();
        }

        return Auth::$instance;
    }
//definimos que repositorio estaremos usando
    private function setUserRepository(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

	private function __construct() {

	}
//nos fijamos si esta logeado
    public function checkLogin()
    {
        if (!isset($_SESSION["usuarioLogueado"]))
        {
            //Me tengo que fijar si hay cookie!
            if (isset($_COOKIE["usuarioLogueado"])) {
                $idUsuario = $_COOKIE["usuarioLogueado"];

                $usuario = $this->userRepository->getUsuarioById($idUsuario);

                $this->loguear($usuario);
            }
        }
    }
//se explica solo con el nombre de la funcion
    public function loguear($usuario)
    {
        $_SESSION["usuarioLogueado"] = $usuario;
    }
//logout
    public function logout()
    {
        session_destroy();
        $this->unsetCookie("usuarioLogueado");
    }
//expira el cookie
    private function unsetCookie($cookie)
    {
        setcookie($cookie, "", -1);
    }
//retorna true o false si esta logeado
    public function estaLogueado()
    {
        return isset($_SESSION["usuarioLogueado"]);
    }
//no retorna los datos del usuario que esta logeado
    public function getUsuarioLogueado() {
        return $_SESSION["usuarioLogueado"];
    }
}
