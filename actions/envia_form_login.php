<?php

session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

include('../conexaobanco/conexao_banco.php');

$resultado = mysql_query("select * from pessoa where email='$email' and senha='$senha'");

if ($email === 'nandorech@outlook.com'){
	
	if (mysql_num_rows($resultado)>0){
		$_SESSION['email'] = 'nandorech@outlook.com';
		$_SESSION['senha'] = $senha;
		header('location:..\colecaoadmin.php');
	}else{
		unset($_SESSION['email']);
		unset($_SESSION['senha']);
		echo "<script>alert('Usuário e/ou senha inválidos')
			window.location='index.html';
		</script>";
	}
	
}else{
	
	if (mysql_num_rows($resultado)>0){
		$_SESSION['email'] = $email;
		$_SESSION['senha'] = $senha;
		header('location:..\colecao.php');
	}else{
		unset($_SESSION['email']);
		unset($_SESSION['senha']);
		echo "<script>alert('Usuário e/ou senha inválidos')
			window.location='index.html';
		</script>";
	}
	
}
?>