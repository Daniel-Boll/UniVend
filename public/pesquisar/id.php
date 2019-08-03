<?php
	include("conectar.php");
	$id = $_POST['siglapasse'];

	if($siglapasse!=""){
		$query = sprintf("SELECT * FROM contratos WHERE siglacontrato = '$siglapasse'");
	} else{
		$query = sprintf("SELECT * FROM contratos");
	}

	$dados = mysqli_query($conn, $query) or die(mysqli_error());

	$linha = mysqli_fetch_assoc($dados);

	$total = mysqli_num_rows($dados);
?>

<!DOCTYPE html>

  <html lang="pt-br">

    <head>
		
		<style type="text/css">
		
			.fonte{
				font-size: 15px;
			}
		
		</style>

      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="estilo.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8">
      
		<title> Relatorio de Contrato </title>
		
      <script type="text/javascript" src="js/jquery.js"></script><!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="app.js"></script>
    </head>

    <body>
               
 <nav class="green darken-2">
    <div class="nav-wrapper">
      <a href="relcontrato.php" class="brand-logo"><img src="images/unimed.png" height="62px" width="90"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="cadastrarcontrato.php">Cadastrar Contratos</a></li>
            <li><a href="cadastro.php">Cadastrar Usuarios</a></li>
        <li><a href="relcontrato.php">Relatório de Contratos</a></li>
        <li><a href="relatorioindicadores.php">Verificar indicadores</a></li>
		  <li><a href="verificar.php">Cadastrar indicadores</a></li>
		  <li><a href="modificar.php"> Modificar Contratos </a></li>
		<li><a href="index.php">Deslogar</a></li>

      </ul>
    </div>
  </nav>
<nav>
    <div class="nav-wrapper">
      <form method="POST" action="relatoriopesquisa.php">
        <div class="input-field">
          <input id="search" name="siglapasse" type="search" required class="green ">
          <label class="label-icon" for="search"><i class="material-icons green "  value="enviar">search</i></label>
          <i class="material-icons">close</i>
        </div>
    </form>
		
		
    
    </div>
  </nav>

  
      
      
    </form> 
	  
	  <br>
	  
	  <center><h5><a href="relcontrato.php"> Realizar nova pesquisa </a></h5></center>
	  
	  <div class="fonte">
	  <table border="1">
			<tr>
				<td><b> ID </td>
				<td><b> CNPJ </td>
				<td><b> Status </td>
				<td><b> Número do Contrato </td>
				<td><b> Razão Social </td>
				<td><b> Nome Fantasia </td>
				<td><b> Tipo de Contrato </td>
				<td><b> Objeto Contratação </td>
				<td><b> Inicio de Vigência </td>
				<td><b> Término de Vigência </td>
				<td><b> Valor Estimado </td>
				<td><b> Número de Parcelas </td>
				<td><b> Valor das Parcelas </td>
				<td><b> Tipo de Pagamento </td>
				<td><b> Reajuste </td>
				<td><b> Indíce de Reajuste </td>
				<td><b> Indicadores </td>
				<td><b> Data de Solicitação </td>
				<td><b> Data de Entrega </td>
				<td><b> Arquivo </td>
				<td><b> Arquivo Morto </td>
				</tr>
			
			<?php

				if($total > 0) {

					do {
			?>
					<tr>
						<td> <?=$linha['id']?> </td>
						<td> <?=$linha['cnpj']?> </td>
						<td> <?=$linha['status']?> </td>
						<td> <?=$linha['siglacontrato']?>-<?=$linha['numerocontrato']?> </td>
						<td> <?=$linha['razaosocial']?> </td>
						<td> <?=$linha['nomefantasia']?> </td>
						<td> <?=$linha['tipocontrato']?> </td>
						<td> <?=$linha['objetocontratacao']?> </td>
						<td> <?=$linha['iniciovigencia']?> </td>
						<td> <?=$linha['terminovigencia']?> </td>
						<td> <?=$linha['valorestimado']?> </td>
						<td> <?=$linha['numeroparcelas']?> </td>
						<td> <?=$linha['valorparcelas']?> </td>
						<td> <?=$linha['pagamento']?> </td>
						<td> <?=$linha['reajuste']?> </td>
						<td> <?=$linha['indicereajuste']?> </td>
						<td> <?=$linha['indicadores']?> </td>
						<td> <?=$linha['datasolicitacao']?> </td>
						<td> <?=$linha['dataentrega']?> </td>
						<td> <?=$linha['dataarquivo']?> </td>
						<td> <?=$linha['dataarquivomorto']?> </td>
					</tr>

			<?php

					}while($linha = mysqli_fetch_assoc($dados));

				}else{
					echo "Nenhum cadastro com a sigla ".$siglapasse." encontrado.";
				}
			$siglapasse = "0";
			?>
		</table>
		  </div>



     

    </body>
    
  </html>
<?php
// tira o resultado da busca da memória
mysqli_free_result($dados);
?>