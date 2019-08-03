<?php

	$server = "localhost";
	$usuario = "root";
	$senha = "";
	$database = "unimed";

	$conn = new mysqli($server, $usuario, $senha, $database) or die (mysqli_error($conn));

?>