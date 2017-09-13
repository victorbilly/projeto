	<?php
	$nome = $_POST['nome'];
	$modelo = $_POST['modelo'];
	$especificacoesTecnicas = $_POST['especificacoesTecnicas'];
	$edicao = $_POST['edicao'];
	$descricao = $_POST['descricao'];

	include('../conexaobanco/conexao_banco.php');

	$sql = mysql_query("INSERT INTO plataforma(nome, modelo, 	especificacoesTecnicas, edicao, descricao)
	VALUES ('$nome', '$modelo', '$especificacoesTecnicas', '$edicao', '$descricao')");

	if ($sql){ //Verificar se foi cadastrado
		
		echo "<script>
				window.location = '../cadastro_concluido.html';
			</script>";
	}else{
		echo "Falha ao cadastrar!" . mysql_error();
	}
?>