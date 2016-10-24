<?php

require_once("clases/auth.php");
require_once("clases/usuario.php");
require_once("clases/validator.php");
require_once("clases/JsonRepository.php");

$tipoRepositorio= "json";
$repositorio = null;

if ($tipoRepositorio== "json")
{
  $repositorio= new JsonRepository();
}

$auth = Auth::getInstance($repositorio->getUserRepository());
$validar = validator::getInstance($repositorio->getUserRepository());
