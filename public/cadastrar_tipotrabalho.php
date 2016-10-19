<?php 

	include_once "../private/php/model/TipoTrabalho.php";

	if (isset($_POST["nmTipoTrabalho"])) {
		
		$tipoTrabalho = new TipoTrabalho();
		$tipoTrabalho->setNmTipoTrabalho($_POST["nmTipoTrabalho"]);
		$tipoTrabalho->setBAtivo(isset($_POST["bAtivo"]));
		
		try {
			$tipoTrabalho->inserir();
			echo "<h3>Cadastro realizado com sucesso.</h3> <br />";
		} catch (Exception $e) {
			echo "Erro ao inserir <br />";
			echo "<strong>Erro - " . $e->getMessage() . "</strong><br />";
		}

	}
	
	
?>

<!doctype html>
<html>
	<head>
		<title>SIS.PU - Cadastro de Tipo de Trabalho</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<div id="divCadastro">
			<form action="" method="post" >
				<ul>
					<li><h3>Cadastro de Tipo de Trabalho</h3></li>
				</ul>
				<ul>
					<li>C&oacute;digo</li>
					<li><input type="number" name="cdTipoTrabalho" /> </li>
				</ul>
				<ul>
					<li>Nome do Trabalho</li>
					<li><input type="text" maxlength="50" name="nmTipoTrabalho" /></li>
				</ul>
				<ul>
					<li>Ativo: <input type="checkbox" name="bAtivo" checked /></li>
				</ul>
				<ul>
					<li><button type="submit">Enviar</button>
				</ul>
			</form>
		</div>
	</body>
</html>


