<?php

session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

include('../conexaobanco/conexao_banco.php');

$resultado = mysql_query("select * from pessoa where email='$email' and senha='md5($senha)'");

// Verificando se o usuário é o admin
if ($email === 'nandorech@outlook.com'){
	
	if (mysql_num_rows($resultado)>0){
		$_SESSION['email'] = 'nandorech@outlook.com';
		$_SESSION['senha'] = $senha;
		header('location:..\colecaoadmin.php');
	}else{
		unset($_SESSION['email']);
		unset($_SESSION['senha']);
		echo "<script>alert('Usuário e/ou senha inválidos')
			window.location='location:..\index.php';
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
			window.location='location:..\index.php';
		</script>";
	}
	
}
?>