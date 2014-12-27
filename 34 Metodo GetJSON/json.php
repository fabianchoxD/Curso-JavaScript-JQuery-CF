<?php 
	$or = array (
					'n' => empty($_GET['nombre'])?'Nombre Default':$_GET['nombre'],
					'c' => empty($_GET['mail'])?'default@correo':$_GET['mail'],
					'm' => empty($_GET['mensaje'])?'Mensaje Default':$_GET['mensaje']
		);
	echo json_encode($or);
 ?>