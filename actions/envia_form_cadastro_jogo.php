	<?php
	$nome = $_POST['nome'];
	$plataforma = $_POST['plataforma'];
	$edicao = $_POST['edicao'];
	$midia = $_POST['midia'];
	$descricao = $_POST['descricao'];

	include('../conexaobanco/conexao_banco.php');

	$sql = mysql_query("INSERT INTO jogo(nome, plataforma, edicao, midia, descricao)
	VALUES ('$nome', '$plataforma', '$edicao', '$midia', '$descricao')");

	if ($sql){ //Verificar se foi cadastrado
		
		echo "<script>
				window.location = '../cadastro_concluido.html';
			</script>";
	}else{
		echo "Falha ao cadastrar!" . mysql_error();
	}
?>