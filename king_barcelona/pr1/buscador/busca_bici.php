<?php
	$mysqli = new mysqli("localhost", "root", "", "projecte_1");
	if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	echo $mysqli->host_info . "\n";

	/*$mysqli = new mysqli("127.0.0.1", "usuario", "contraseña", "basedatos", 3306);
	if ($mysqli->connect_errno) {
	    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}*/

	echo $mysqli->host_info . "\n";
		echo "hola <a href='../../indice.html'> Pulsa aquí para volver</a>";
