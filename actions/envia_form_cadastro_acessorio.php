	<?php
	$nome = $_POST['nome'];
	$plataforma = $_POST['plataforma'];
	$restricao = $_POST['restricao'];
	$qualRestricao = $_POST['qualRestricao'];
	$edicao = $_POST['edicao'];
	$descricao = $_POST['descricao'];

	include('../conexaobanco/conexao_banco.php');

	$sql = mysql_query("INSERT INTO acessorio(nome, plataforma, restricao, qualRestricao, edicao, descricao)
	VALUES ('$nome', '$plataforma', '$restricaogame', '$restricao', '$edicao', '$descricao')");

	if ($sql){ //Verificar se foi cadastrado
		
		echo "<script>
				window.location = '../cadastro_concluido.html';
			</script>";
	}else{
		echo "Falha ao cadastrar!" . mysql_error();
	}
?>