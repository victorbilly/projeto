<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- Informa que o documento foi criado em HTML5 -->

<!-- Informa que o site foi criado em português do Brasil -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">

<head>
	<title>Gamer Collection</title>
	
	<!-- Passa a apresentar acentuações -->
	<meta charset="utf-8"/>
	
	<!-- -->
	<?php
	
		session_start();
		if((!isset($_SESSION['email']) === true) && (!isset($_SESSION['senha']) === true)){
			unset($_SESSION['email']);
			unset($_SESSION['senha']);
			header('location:index.html');
		}
	$logado = $_SESSION['email'];
	
	?>
	

	<!-- Favicon -->
	<link rel="shortcut icon" href="IMG/fav.png" type="image/x-icon">
	
	<!-- Arquivo CSS -->
	<link rel="stylesheet" href="CSS/estilo_gamercollection.css">
	
	<!-- Importar fonte do Google -->
	<link href="http://fonts.googleapis.com/css?family=Lato%3A400%2C700%2C400italic%2C700italic" rel="stylesheet">
</head>

<body>
	<header>
		<div class="banner">
			<span id="logo_pages"><a href="index.html" class="link">GamerCollection</a></span>
		</div>
	</header>
	
	<div id="divBuscaPgs">
		<img src="IMG/search3.png"/>
		<input type="text" id="txtBusca" placeholder="Nome da coleção"/>
		<button id="btnBusca">Buscar</button>
	</div>
	
	
	<section>
	 
		 <section id="aside">
		 	
		 	<table border="1" id="table_aside">
		 		<tr height="160">
		 			<td></td>
		 		</tr>
		 		
		 		<tr height="30">
		 			<td>Minha coleção</td>
		 		</tr>
		 		
		 		<tr height="30">
		 			<td>Meus desejos</td>
		 		</tr>
		 		
		 		<tr height="30">
		 			<td>Danificados</td>
		 		</tr>
		 		
		 		<tr height="30">
		 			<td>Empréstimos</td>
		 		</tr>
		 		
		 		<tr height="260">
		 			<td>
		 				Cadastre no sistema:	 				
		 			</td>
		 		</tr>
		 		
		 		<tr height="30">
		 			<td>Novo Jogo</td>
		 		</tr>
		 		
		 		<tr height="30">
		 			<td>Novo Acessório</td>
		 		</tr>
		 		
		 		<tr height="30">
		 			<td>Novo Console</td>
		 		</tr>
		 		
		 	</table>
		 	
		</section>
        
        <section id="conteudo">
        	Conteúdos
        	<br/>
        	<?php
				echo $logado;
			?>
        </section>
        
	</section>
	
</body>
</html>