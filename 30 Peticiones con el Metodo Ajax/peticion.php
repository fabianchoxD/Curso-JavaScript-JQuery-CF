<?php

	$nombre = $_POST["nombre"];
	$mensaje = $_POST["mensaje"];
	$mail = $_POST["mail"];

	if($nombre != "" && $mensaje != "" && $mail != "")
		echo 'Correcto';
	else
		echo 'Incorrecto';
 ?>