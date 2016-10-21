<?php

require_once("clases/auth.php");
require_once("clases/validator.php");
require_once("clases/jsonRepository.php");
require_once("clases/usuario.php");

$tipoRepositorio = "json";
$repositorio = null;

if ($tipoRepositorio == "json")
{
	$repositorio = new JSONRepository();
}
//comenzamos las variables aut y validar por poder utilizarlas mas
//comodamente sin tener que trar la instancia siempre.
$auth = Auth::getInstance($repositorio->getUserRepository());
$validar = Validar::getInstance($repositorio->getUserRepository());
