<!doctype html>
<html>
	<head>
		      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="../estilo.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8">
      
      <script type="text/javascript" src="../js/jquery.js"></script><!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="../js/materialize.min.js"></script>
      <script type="text/javascript" src="../app.js"></script>
		<meta charset="utf-8">
		<title> Avaliação </title>
		
	</head>

	<body>
		 <nav class="green darken-2">
    <div class="nav-wrapper">
      <a href="relcontrato.php" class="brand-logo"><img src="../images/unimed.png" height="62px" width="90"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="cadastrarcontrato.php">Cadastrar Contratos</a></li>
            <li><a href="cadastro.php">Cadastrar Usuarios</a></li>
        <li><a href="relcontrato.php">Relatório de Contratos</a></li>
        <li><a href="verificar.php">Verificar indicadores</a></li>
        <li><a href="cadastrarindicador1.php">Cadastrar Indicadores</a></li>

      </ul>
    </div>
  </nav>

		<form method="POST" action="cadastrarindicador2.php">
			
		<!-- Inicio Avaliação 1 -->
		<div class="row">
			<div class="col s4">
		 <label for="avaliacao1" class="green-text"> Avaliação 1: </label>
		<input type="text" name="tipo1">
	        </div>
	        <div class="col s4">
			
		 <label for="peso1" class="green-text">Peso 1: </label>
		<input type="text" name="peso1">
		</div>
		<div class="col s4">
		<label for="contatos1" class="green-text">Contatos: </label>
		<input type="text" name="contatos1">
		</div></div>
		
		
		<table border="1" class="green-text">
			<tr>
				<td> Condição </td>
				<td> Pontos </td>
				<td> Itens </td>
			</tr>
			
			<tr>
				<td> <input type="text" name="condicao11"> </td>
				<td> <input type="text" value="10" name="pontos11"> </td>
				<td> <input type="text" name="itens11"> </td>
			</tr>
			
			<tr>
				<td> <input type="text" name="condicao12"> </td>
				<td> <input type="text" value="5" name="pontos12"> </td>
				<td> <input type="text" name="itens12"> </td>
			</tr>
			
			<tr>
				<td> <input type="text" name="condicao13"> </td>
				<td> <input type="text" value="0" name="pontos13"> </td>
				<td> <input type="text" name="itens13"> </td>
			</tr>
		
		</table>
		<!-- Término Avaliação 1 -->
		<br><BR><hr><hr><BR><BR>
		<!-- Inicio Avaliação 2 -->
		<div class="row">
			<div class="col s4">
		 <label for="avaliacao2" class="green-text"> Avaliação 2: </label>
		<input type="text" name="tipo2">
	        </div>
	        <div class="col s4">
			
		 <label for="peso2" class="green-text">Peso 2: </label>
		<input type="text" name="peso2">
		</div>
		<div class="col s4">
		<label for="contatos2" class="green-text">Contatos 2: </label>
		<input type="text" name="contatos2">
		</div></div>
		<br>
		<br>
		
		<table border="1" class="green-text">
			<tr>
				<td> Condição </td>
				<td> Pontos </td>
				<td> Itens </td>
			</tr>
			
			<tr>
				<td> <input type="text" name="condicao21"> </td>
				<td> <input type="text" value="10" name="pontos21"> </td>
				<td> <input type="text" name="itens21"> </td>
			</tr>
			
			<tr>
				<td> <input type="text" name="condicao22"> </td>
				<td> <input type="text" value="5" name="pontos22"> </td>
				<td> <input type="text" name="itens22"> </td>
			</tr>
			
			<tr>
				<td> <input type="text" name="condicao23"> </td>
				<td> <input type="text" value="0" name="pontos23"> </td>
				<td> <input type="text" name="itens23"> </td>
			</tr>
		
		</table>
		<!-- Término Avaliação 2 -->
			<br><BR><hr><hr><BR><BR>
		<!-- Inicio Avaliação 3 -->
		<div class="row">
			<div class="col s4">
		 <label for="avaliacao3" class="green-text"> Avaliação 3: </label>
		<input type="text" name="tipo3">
	        </div>
	        <div class="col s4">
			
		 <label for="peso3" class="green-text">Peso 3: </label>
		<input type="text" name="peso3">
		</div>
		<div class="col s4">
		<label for="contatos3" class="green-text">Contatos 3: </label>
		<input type="text" name="contatos3">
		</div></div>
		<br>
		<br>
		
		<table border="1" class="green-text">
			<tr>
				<td> Condição </td>
				<td> Pontos </td>
				<td> Itens </td>
			</tr>
			
			<tr>
				<td> <input type="text" name="condicao31"> </td>
				<td> <input type="text" value="10" name="pontos31"> </td>
				<td> <input type="text" name="itens31"> </td>
			</tr>
			
			<tr>
				<td> <input type="text" name="condicao32"> </td>
				<td> <input type="text" value="5" name="pontos32"> </td>
				<td> <input type="text" name="itens32"> </td>
			</tr>
			
			<tr>
				<td> <input type="text" name="condicao33"> </td>
				<td> <input type="text" value="0" name="pontos33"> </td>
				<td> <input type="text" name="itens33"> </td>
			</tr>
		
		</table>
		<!-- Término Avaliação 3 -->
			<br><BR><hr><hr><BR><BR>
		<!-- Inicio Avaliação 4 -->
	<div class="row">
			<div class="col s4">
		 <label for="avaliacao4" class="green-text"> Avaliação 4: </label>
		<input type="text" name="tipo4">
	        </div>
	        <div class="col s4">
			
		 <label for="peso4" class="green-text">Peso 4: </label>
		<input type="text" name="peso4">
		</div>
		<div class="col s4">
		<label for="contatos4" class="green-text">Contato4: </label>
		<input type="text" name="contatos4">
		</div></div>
		<br>
		<br>
	
		
		<table border="1" class="green-text">
			<tr>
				<td> Condição </td>
				<td> Pontos </td>
				<td> Itens </td>
			</tr>
			
			<tr>
				<td> <input type="text" name="condicao41"> </td>
				<td> <input type="text" value="10" name="pontos41"> </td>
				<td> <input type="text" name="itens41"> </td>
			</tr>
			
			<tr>
				<td> <input type="text" name="condicao42"> </td>
				<td> <input type="text" value="5" name="pontos42"> </td>
				<td> <input type="text" name="itens42"> </td>
			</tr>
			
			<tr>
				<td> <input type="text" name="condicao43"> </td>
				<td> <input type="text" value="0" name="pontos43"> </td>
				<td> <input type="text" name="itens43"> </td>
			</tr>
		
		</table>
		<!-- Término Avaliação 4 -->
			<br><BR><hr><hr><BR><BR>
		<!-- Inicio Avaliação 5 -->
		<div class="row">
			<div class="col s4">
		 <label for="avaliacao5" class="green-text"> Avaliação 5: </label>
		<input type="text" name="tipo5">
	        </div>
	        <div class="col s4">
			
		 <label for="peso5" class="green-text">Peso 5: </label>
		<input type="text" name="peso5">
		</div>
		<div class="col s4">
		<label for="contatos5" class="green-text">Contatos 5: </label>
		<input type="text" name="contatos3">
		</div></div>
		<br>
		<br>
		
		<table border="1" class="green-text">
			<tr>
				<td> Condição </td>
				<td> Pontos </td>
				<td> Itens </td>
			</tr>
			
			<tr>
				<td> <input type="text" name="condicao51"> </td>
				<td> <input type="text" value="10" name="pontos51"> </td>
				<td> <input type="text" name="itens51"> </td>
			</tr>
			
			<tr>
				<td> <input type="text" name="condicao52"> </td>
				<td> <input type="text" value="5" name="pontos52"> </td>
				<td> <input type="text" name="itens52"> </td>
			</tr>
			
			<tr>
				<td> <input type="text" name="condicao53"> </td>
				<td> <input type="text" value="0" name="pontos53"> </td>
				<td> <input type="text" name="itens53"> </td>
			</tr>
		
		</table>
		<!-- Término Avaliação 5 -->
			<br><BR><hr><hr><BR><BR>
		<!-- Inicio Avaliação 6 -->
		<div class="row">
			<div class="col s4">
		 <label for="avaliacao6" class="green-text"> Avaliação 6: </label>
		<input type="text" name="tipo6">
	        </div>
	        <div class="col s4">
			
		 <label for="peso6" class="green-text">Peso 6: </label>
		<input type="text" name="peso6">
		</div>
		<div class="col s4">
		<label for="contatos6" class="green-text">Contato6: </label>
		<input type="text" name="contatos6">
		</div></div>
		<br>
		<br>
		
		<table border="1" class="green-text">
			<tr>
				<td> Condição </td>
				<td> Pontos </td>
				<td> Itens </td>
			</tr>
			
			<tr>
				<td> <input type="text" name="condicao61"> </td>
				<td> <input type="text" value="10" name="pontos61"> </td>
				<td> <input type="text" name="itens61"> </td>
			</tr>
			
			<tr>
				<td> <input type="text" name="condicao62"> </td>
				<td> <input type="text" value="5" name="pontos62"> </td>
				<td> <input type="text" name="itens62"> </td>
			</tr>
			
			<tr>
				<td> <input type="text" name="condicao63"> </td>
				<td> <input type="text" value="0" name="pontos63"> </td>
				<td> <input type="text" name="itens63"> </td>
			</tr>
		
		</table>
		<!-- Término Avaliação 6 -->
			<br><BR><hr><hr><BR><BR>
		<!-- Inicio Avaliação 7 -->
		<div class="row">
			<div class="col s4">
		 <label for="avaliacao7" class="green-text"> Avaliação 7: </label>
		<input type="text" name="tipo7">
	        </div>
	        <div class="col s4">
			
		 <label for="peso7" class="green-text">Peso 7: </label>
		<input type="text" name="peso7">
		</div>
		<div class="col s4">
		<label for="contatos7" class="green-text">Contato7: </label>
		<input type="text" name="contatos7">
		</div></div>
		<br>
		<br>
		
		<table border="1" class="green-text">
			<tr>
				<td > Condição </td>
				<td> Pontos </td>
				<td> Itens </td>
			</tr>
			
			<tr>
				<td> <input type="text" name="condicao71"> </td>
				<td> <input type="text" value="10" name="pontos71"> </td>
				<td> <input type="text" name="itens71"> </td>
			</tr>
			
			<tr>
				<td> <input type="text" name="condicao72"> </td>
				<td> <input type="text" value="5" name="pontos72"> </td>
				<td> <input type="text" name="itens72"> </td>
			</tr>
			
			<tr>
				<td> <input type="text" name="condicao73"> </td>
				<td> <input type="text" value="0" name="pontos73"> </td>
				<td> <input type="text" name="itens73"> </td>
			</tr>
		
		</table>
		<!-- Término Avaliação 7 -->
			
		<br>
		<p> ID: </p>
		<input type="text" name="id">
		<input type="submit" name="enviar" value="Próximo passo">
		
		</form>
		
	</body>
</html>