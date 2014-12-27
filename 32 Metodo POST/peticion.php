<?php

	$nombre = $_POST["nombre"];
	$mensaje = $_POST["mensaje"];
	$mail = $_POST["mail"];

	 echo $nombre . "+" . $mensaje . "+" . $mail . "= ";

	//sleep(4);

	if($nombre != "" && $mensaje != "" && $mail != "")
		echo 'correcto';
	
	else
		echo 'Incorrecto';
	
 ?>