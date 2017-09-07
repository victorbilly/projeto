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

	<!-- Verificar se as senhas digitadas são iguais -->
	<script>
		function validarSenha(){
			senha = document.usuario.senha.value
			senha2 = document.usuario.senha2.value
 
		if (senha != senha2){
			alert ('Senhas diferentes');
			usuario.senha.focus;
			return false;
		}
		}
	</script>
</head>

<body>
	<header>
		<div class="banner">
			<span id="logo_pages"><a href="index.php" class="link">GamerCollection</a></span>
		</div>
	</header>
	
	<div id="divBuscaPgs">
		<img src="IMG/search3.png"/>
		<input type="text" id="txtBusca" placeholder="Nome da coleção"/>
		<button id="btnBusca">Buscar</button>
	</div>
	
	
	<section>
		<form name="usuario" action="actions/envia_form_cadastro.php" method="POST">
			<h1>Cadastro do usuário:</h1>
			<br />
			<div id="cadastro">
				
			<fieldset>
     		<legend>Dados pessoais</legend>
			<ul>
				<li>Nome completo: *</li>
				<li><input type="text" class="formulario" name="nome" title="Informe o seu nome completo" required/></li>
			</ul>
			
			<ul>
				<li>Foto de perfil: <input type="button" value="Carregar foto"></li>
			</ul>
				
			<ul>
				<li>Telefone: *</li>
				<li><input type="tel" class="formulario" name="telefone" placeholder=" (00) 00000-0000" title="Informe o seu telefone" required/></li>
			</ul>
			
			<ul>
				<li>Gênero: *
				<input type="radio" name="genero" value="masculino" checked /> Masculino
				<input type="radio" name="genero" value="feminino" /> Feminino</li>
			</ul>	
			
			<ul>
				<li>Data de nascimento: *
				<input type="date" id="formulario2" name="dataNascimento" title="Informe sua data de nascimento" required/></li>
			</ul>
				
			<ul>
				<li>E-mail: *</li>
				<li><input type="email" class="formulario" name="email" placeholder=" email@exemplo.com.br" title="Informe o seu e-mail" required/></li>
			</ul>
				
			<ul>
				<li>Senha: *</li>
				<li><input type="password" class="formulario" minlength="8" maxlength="15" name="senha" title="Defina a sua senha" required/></li>
			</ul>
			
			<ul>
				<li>Confirme sua senha: *</li>
				<li><input type="password" class="formulario" minlength="8" maxlength="15" title="Confirme a sua senha" name="senha2" required/></li>
			</ul>
			
			<ul>
				<li>Web site:</li>
				<li><input type="text" class="formulario" name="website" title="Informe o seu web site"/></li>
			</ul>
			
			</fieldset>
				
			<br>
				
			<fieldset>
     		<legend>Dados da coleção</legend>
				
			<ul>
				<li>Nome da coleção: *</li>
				<li><input type="text" class="formulario" name="nomeColecao" title="Defina o nome da sua coleção" required/></li>
			</ul>
				
			<ul>
				<li>Plataforma favorita:</li>
				<li><input type="text" class="formulario" name="plataformaFavorita" title="Informe seu jogo favorito" /></li>
			</ul>
				
			<ul>
				<li>Jogo favorito:</li>
				<li><input type="text" class="formulario" name="jogoFavorito" title="Informe seu jogo favorito" /></li>
			</ul>
				
			<ul>
				<li>Como será a sua coleção:
				<input type="radio" name="cargo" value="1" checked /> Pública
				<input type="radio" name="cargo" value="2" /> Privada</li>
			</ul>			
				
			</fieldset>
				
			<br/>
			
			<input class="btn" type="submit" value="Cadastrar" onClick="return validarSenha()"/>
			
			<!--
			<a href="cadastro.html" class="btn">Cadastrar</a><br><br><br>
			-->
			</div>
			
			</form>
			
			<br/>
	
			<hr>
			<p>TCC ADS 2017 - by Fernando Rech - #UPF</p>
		
	</section>
	
</body>
</html>