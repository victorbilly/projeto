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
	<link rel="stylesheet" href="CSS/estilo_gamercollection.css">
	
	<!-- Importar fonte do Google -->
	<link href="http://fonts.googleapis.com/css?family=Lato%3A400%2C700%2C400italic%2C700italic" rel="stylesheet">

</head>

<body>
	<header>
		<div class="banner">
			<span id="logo_pages"><a href="http://gamercollection.com.br/colecao.php" class="link">GamerCollection</a></span>
		</div>
	</header>
	
	<div id="divBuscaPgs">
		<img src="IMG/search3.png"/>
		<input type="text" id="txtBusca" placeholder="Nome da coleção"/>
		<button id="btnBusca">Buscar</button>
	</div>
	
	
	<section>
		<form name="acessorio" action="actions/envia_form_cadastro_plataforma.php" method="POST">
			<h1>Cadastro de plataforma:</h1>
			<br />
			<div id="cadastro">
				
			<fieldset>
     		<legend>Dados cadastrais</legend>
			<ul>
				<li>Nome: *</li>
				<li><input type="text" class="formulario" name="nome" title="Informe o seu nome da plataforma" required/></li>
			</ul>
			
			<ul>
				<li>Foto da plataforma: <input type="button" value="Carregar foto"></li>
			</ul>
							
			<ul>
				<li>Modelo: *</li>
				<li><input type="text" class="formulario" name="modelo" title="Informe o modelo da plataforma" required/></li>
			</ul>
			
			<ul>
				<li>Especificações técnicas: *</li>
				<li><input type="text" class="formulario" name="especificacoesTecnicas" title="Informe as especificações da plataforma" required/></li>
			</ul>
				
			<ul>
				<li>Edição: *</li>
				<li><input type="text" class="formulario" name="edicao" title="Informe a edição da plataforma" /></li>
			</ul>
				
			<ul>
				<li>Descrição: *</li>
				<li><input type="text" class="formulario" name="descricao" title="Descreva a plataforma" /></li>
			</ul>
						
			<br/><br/><br/>
			
			
			</fieldset>
				
			<br/>
			
			<input class="btn" type="submit" value="Cadastrar"/>
			
			</div>
			
			</form>
			
			<br/>
	
			<hr>
			<p>TCC ADS 2017 - by Fernando Rech - #UPF</p>
		
	</section>
	
</body>
</html>