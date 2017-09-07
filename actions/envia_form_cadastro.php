	<?php
	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$genero = $_POST['genero'];
	$dataNascimento = $_POST['dataNascimento'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$website = $_POST['website'];
	$nomeColecao = $_POST['nomeColecao'];
	$plataformaFavorita = $_POST['plataformaFavorita'];
	$jogoFavorito = $_POST['jogoFavorito'];


	include('../conexaobanco/conexao_banco.php');

	$sql = mysql_query("INSERT INTO pessoa(nome, telefone, genero, dataNascimento, email, senha, website, nomeColecao, plataformaFavorita, jogoFavorito)
	VALUES ('$nome', '$telefone', '$genero', '$dataNascimento', '$email', md5('$senha'), '$website', '$nomeColecao', '$plataformaFavorita', '$jogoFavorito' )");

	if ($sql){ //Verificar se foi cadastrado
		
		echo "<script>
				window.location = '../cadastro_concluido.html';
			</script>";
	}else{
		echo "Falha ao cadastrar!" . mysql_error();
	}
?>