<?php

	//* Começo Avaliação 1 *//
		$contatos1 = $_POST['contatos1'];

		if($contatos1 <> ""){
			$pontos11 = $_POST['pontos11'];
		$itens11 = $_POST['itens11'];

		$pontos12 = $_POST['pontos12'];
		$itens12 = $_POST['itens12'];

		$peso1 = $_POST['peso1'];

		$soma1 = ((($pontos11*$itens11)+($pontos12*$itens12))/($contatos1*10));

		$valor1 = ($soma1*$peso1);
		} else{
			
		}

		
	//* Fim Avaliação 1 *//

	//* Começo Avaliação 2 *//
		$contatos2 = $_POST['contatos2'];
		if($contatos2 <> ""){


				$pontos21 = $_POST['pontos21'];
				$itens21 = $_POST['itens21'];

				$pontos22 = $_POST['pontos22'];
				$itens22 = $_POST['itens22'];

				$peso2 = $_POST['peso2'];

				$soma2 = ((($pontos21*$itens21)+($pontos22*$itens22))/($contatos2*10));

				$valor2 = ($soma2*$peso2);
		} else{

		}
		
	//* Fim Avaliação 2 *//

	//* Começo Avaliação 3 *//
		$contatos3 = $_POST['contatos3'];

		if($contatos3 <> ""){
		$pontos31 = $_POST['pontos31'];
		$itens31 = $_POST['itens31'];

		$pontos32 = $_POST['pontos32'];
		$itens32 = $_POST['itens32'];

		$peso3 = $_POST['peso3'];

		$soma3 = ((($pontos31*$itens31)+($pontos32*$itens32))/($contatos3*10));

		$valor3 = ($soma3*$peso3);
		} else{
			
		}


	//* Fim Avaliação 3 *//

	//* Começo Avaliação 4 *//
		$contatos4 = $_POST['contatos4'];

		if($contatos4 <> ""){
		$pontos41 = $_POST['pontos41'];
		$itens41 = $_POST['itens41'];

		$pontos42 = $_POST['pontos42'];
		$itens42 = $_POST['itens42'];

		$peso4 = $_POST['peso4'];

		$soma4 = ((($pontos41*$itens41)+($pontos42*$itens42))/($contatos4*10));

		$valor4 = ($soma4*$peso4);
		} else{
			
		}

		
	//* Fim Avaliação 4 *//

	//* Começo Avaliação 5 *//
		$contatos5 = $_POST['contatos5'];

		if($contatos5 <> ""){
		$pontos51 = $_POST['pontos51'];
		$itens51 = $_POST['itens51'];

		$pontos52 = $_POST['pontos52'];
		$itens52 = $_POST['itens52'];

		$peso5 = $_POST['peso5'];

		$soma5 = ((($pontos51*$itens51)+($pontos52*$itens52))/($contatos5*10));

		$valor5 = ($soma5*$peso5);	
		} else{
			
		}

		
	//* Fim Avaliação 5 *//

	//* Começo Avaliação 6 *//
		$contatos6 = $_POST['contatos6'];

		if($contatos6 <> ""){
		$pontos61 = $_POST['pontos61'];
		$itens61 = $_POST['itens61'];

		$pontos62 = $_POST['pontos62'];
		$itens62 = $_POST['itens62'];

		$peso6 = $_POST['peso6'];

		$soma6 = ((($pontos61*$itens61)+($pontos62*$itens62))/($contatos6*10));

		$valor6 = ($soma6*$peso6);
		} else{
			
		}

		
	//* Fim Avaliação 6 *//

	//* Começo Avaliação 7 *//
		$contatos7 = $_POST['contatos7'];

		if($contatos7 <> ""){
		$pontos71 = $_POST['pontos71'];
		$itens71 = $_POST['itens71'];

		$pontos72 = $_POST['pontos72'];
		$itens72 = $_POST['itens72'];

		$peso7 = $_POST['peso7'];

		$soma7 = ((($pontos71*$itens71)+($pontos72*$itens72))/($contatos7*10));

		$valor7 = ($soma7*$peso7);	
		} else{
			
		}

		
	//* Fim Avaliação 7 *//

		$valorfinal = $valor1+$valor2+$valor3+$valor4+$valor5+$valor6+$valor7;

		if($valorfinal>=90){
			include("conectar.php");
				$sql = "INSERT INTO indicadoresfinal (notafinal, planodemelhoria) VALUES ('$valorfinal', '0');";

				if (mysqli_query($conn, $sql)) {
				header("Location: ../relcontrato.php");
				}
		} else{
			include("conectar.php");
				$sql = "INSERT INTO indicadoresfinal (notafinal, planodemelhoria) VALUES ('$valorfinal', '1');";

				if (mysqli_query($conn, $sql)) {
				header('Location:verificar3.php');
				}
		}

		
?>