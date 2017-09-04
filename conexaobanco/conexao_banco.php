<?php
	$conecta = mysql_connect("sh27.com.br", "nandupco_gamer", "BaTaTa85") or print(mysql_error());
	mysql_select_db("nandupco_gamer", $conecta) or print(mysql_error());
?>