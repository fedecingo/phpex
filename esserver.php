<!doctype html>
<html>
<head>
	<title>Registrazione utente con metodo SERVER</title>
</head>
<body>
	<h2>Registrazione utente con metodo SERVER</h2>
	<?php
		echo "Il tuo IP è ",$_SERVER['REMOTE_ADDR'], "<br/>";
		echo "Il tuo IP è ",$_SERVER['HTTP_USER_AGENT'], "<br/>";
	?>		
</body>
</html>