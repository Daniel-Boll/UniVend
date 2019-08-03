<?php

	include("conectar.php");

	$id = $_POST['id'];

	$query = sprintf("SELECT * FROM indicadores WHERE id = $id");
	$dados = mysqli_query($conn, $query);
	$linha = mysqli_fetch_assoc($dados);
	$total = mysqli_num_rows($dados);

	$status = $_POST['status'];
	$periodicidade = $_POST['periodicidade'];
	$responsavel = $_POST['responsavel'];
	$anexo = $_POST['anexo'];
	$resultado = $_POST['resultado'];

	$siglacontrato = $linha['siglacontrato'];
	$numerocontrato = $linha['numerocontrato'];
	$razaosocial = $linha['razaosocial'];
	$nomefantasia = $linha['nomefantasia'];

	if($status == 1){
		$ativa = "0";
	} else{
		$ativa = "1";
	}

	$sql1 = "INSERT INTO indicadoresfinal (siglacontrato, numerocontrato, razaosocial, nomefantasia, status, periodicidade, responsavel, anexo, resultado, ativa) VALUES ('$siglacontrato', '$numerocontrato', '$razaosocial', '$nomefantasia', '$status', '$periodicidade', '$responsavel', '$anexo', '$resultado', '$ativa');";

	$sql2 = "DELETE FROM indicadores WHERE indicadores.id = '$id';";

		if (mysqli_query($conn, $sql1) && mysqli_query($conn, $sql2)) {
			header('Location:verificar2.php');
		} else{
			echo "Erro ao cadastrar indicador!<br>";
			echo "<a href=relcontrato.php> Clique aqui para voltar ao inicio.</a><br>";
		}

?>