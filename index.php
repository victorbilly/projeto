<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- Informa que o documento foi criado em HTML5 -->

<!-- Informa que o site foi criado em português do Brasil -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">

<head>
	<title>Gamer Collection</title>
	
	<!-- Passa a apresentar acentuações -->
	<meta charset="utf-8"/>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="IMG/fav.png" type="image/x-icon">
	
	<!-- Arquivo CSS -->
	<link rel="stylesheet" href="CSS/home.css">
	
	<!-- Importar fonte do Google -->
	<link href="http://fonts.googleapis.com/css?family=Lato%3A400%2C700%2C400italic%2C700italic" rel="stylesheet">
</head>


<body>
	<header>
		<div class="logo">
			<h1>Gamer Collection</h1>
		</div>
	</header>
	
	<section>
		<h2>[ Gerencie sua coleção de videogames ]</h2>
		
		<p>Um bom colecionador sabe a importância de manter a sua coleção organizada. Ainda mais, quando se trata de um acervo de videogames. Afinal, procurar um game e não encontrá-lo é péssimo, mas encontrá-lo danificado é pior ainda. Por isso, para melhor organização de sua coleção, criamos a <i>GAMER COLLECTION</i>.</p>

		<p>Aqui você poderá catalogar seus consoles, games e acessórios, podendo informar se estes estão emprestados ou até mesmo danificados. E, também poderá criar sua lista de desejos!</p>
		
		<figure>
			<div id="imagem_home"></div>
		</figure>
		
        <h3>Veja as coleções públicas de seus amigos:</h3>
		
		<div id="divBusca">
			<img src="IMG/search3.png"/>
			<input type="text" id="txtBusca" placeholder="Nome da coleção"/>
			<button id="btnBusca">Buscar</button>
		</div>

        <br/><br/><br/><br/>     
                
        <hr/>

		<div class="col">
			<h2>Entrar na coleção:</h2>
			<div class="col_left">
				<form action="actions/envia_form_login.php" method="post">
					E-mail:<input type="text" name="email" class="formlogin"><br />
					Senha:<input type="password" name="senha" class="formlogin"><br />
					<input type="checkbox"><span id="manter_conectado">Mantenha-me conectado</span>
					<br/><br/>
					<input type="submit" class="btn" value="Entrar" name="btnlogin"/>
				</form>	
			</div>
		</div>

		<div class="col">
			<h2>Criar nova coleção:</h2>
			<div class="col_right">
				<a href="cadastro.php" class="btn">Cadastrar</a>
			</div>
		</div>
		
		<hr id="hr_home"><br />
		
		<a href="contato.html"><b>Entre em contato</b></a><br />
		
		<hr>
		
		<p>TCC ADS 2017 - by Fernando Rech - #UPF</p>
		
	</section>
	
</body>
</html>