<?php
	require_once("soporte.php");

	if ($auth->estaLogueado())
	{
		header("location:index.php");exit;
	}

	if ($_POST)
	{
		//Sé que llegó acá tras haber enviado el form

		$errores = $validar->validarLogin();

		if (empty($errores))
		{

			// Loguearlo
			$usuario = $repositorio->getUserRepository()->getUsuarioByMail($_POST["id"]);

			$auth->loguear($usuario);

			// Si me puso que lo recuerde, recordarlo
			if (isset($_POST["recordame"])) {
				//recordarlo
				setcookie("usuarioLogueado", $usuario->getId(), time() + 60 * 60 * 24 * 3);
			}

			// Redirigirlo
			header("location:index.php");exit;
		}
	}
?>
