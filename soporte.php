<?php

require_once("clases/auth.php");
require_once("clases/usuario.php");
require_once("clases/validator.php");
require_once("clases/JsonRepository.php");

$tipoRepositorio= "json";
$Repository = null;

if ($tipoRepositorio== "json")
{
    $Repository= new JsonRepository();
}

$auth = Auth::getInstance($Repository->getUserRepository());
$validar = Validator::getInstance($Repository->getUserRepository());
