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
			<span id="logo_pages"><a href="index.html" class="link">GamerCollection</a></span>
		</div>
	</header>
	
	<div id="divBuscaPgs">
		<img src="IMG/search3.png"/>
		<input type="text" id="txtBusca" placeholder="Nome da coleção"/>
		<button id="btnBusca">Buscar</button>
	</div>
	
	
	<section>
		<form name="acessorio" action="actions/envia_form_cadastro_acessorio.php" method="POST">
			<h1>Cadastro de acessório:</h1>
			<br />
			<div id="cadastro">
				
			<fieldset>
     		<legend>Dados cadastrais</legend>
			<ul>
				<li>Nome: *</li>
				<li><input type="text" class="formulario" name="nome" title="Informe o seu nome completo" required/></li>
			</ul>
			
			<ul>
				<li>Foto do acessório: <input type="button" value="Carregar foto"></li>
			</ul>
							
			<ul>
				<li>Plataforma: *</li>
				<li><input type="email" class="formulario" name="text" placeholder=" email@exemplo.com.br" title="Informe o seu e-mail" required/></li>
			</ul>
			
			<ul>
				<li>Restrição de jogos:
				<input type="radio" name="genero" value="sim" checked /> Sim
				<input type="radio" name="genero" value="nao" /> Não</li>
			</ul>	
			
				
			<ul>
				<li>Informe os jogos que o acessório será útil:</li>
				<li><input type="text" class="formulario" name="nomeColecao" title="Defina o nome da sua coleção" required/></li>
			</ul>
				
			<ul>
				<li>Edição: *</li>
				<li><input type="text" class="formulario" name="plataformaFavorita" title="Informe seu jogo favorito" /></li>
			</ul>
				
			<ul>
				<li>Descrição: *</li>
				<li><input type="text" class="formulario" name="jogoFavorito" title="Informe seu jogo favorito" /></li>
			</ul>
						
				
			</fieldset>
				
			<br/>
			
			<input class="btn" type="submit" value="Cadastrar"/>
			
			<!--
			<a href="cadastro.html" class="btn">Cadastrar</a><br><br><br>
			-->
			</div>
			
			</form>
			
			<br/>
	
			<hr>
			<p>Copyright &copy; - by Fernando Rech</p>
		
	</section>
	
</body>
</html>