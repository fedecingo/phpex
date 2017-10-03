<!doctype html>
<html>
<head>
	<title>Registrazione utente con metodo GET</title>
</head>
<body>
	<h2>Registrazione utente con metodo GET</h2>
	<?php
		$nome=$_GET["nome"];
		$cognome=$_GET["cognome"];
		$email=$_GET["email"];
		
			echo "La richiesta di $nome $cognome è stata registrata.<br/>";
			echo "Con l'indirizzo di posta elettronica: $email.<br/>";
			echo "La richiesta di accesso al servizio è arrivata alle ore ",date("H:i:s"),"<br/>";
	?>		
</body>
</html>