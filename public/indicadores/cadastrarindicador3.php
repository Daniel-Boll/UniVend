<?php

	include("conectar.php");

	$descricaomelhoria = $_POST['descricaomelhoria'];
	$resultado = $_POST['resultado'];
	$id = $_POST['id'];

	$sql = "INSERT INTO indicadoresfinal WHERE id = $id (descricaomelhoria, resultado) VALUES ('$descricaomelhoria', '$resultado');";

		if (mysqli_query($conn, $sql1) && mysqli_query($conn, $sql2)) {
			header("Location: ../relcontrato.php");
		}

?>