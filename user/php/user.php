<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, maximum-scale=1"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<link rel="stylesheet" href="../../css/main.css" />
		<title>Espace Utilisateur</title>
		<h1><?php require_once($_SERVER["DOCUMENT_ROOT"]."/Camagru/header.php"); ?></h1>
	</head>

	<body class="background">
		<form class="register" id='register' action='register.php' method='post' accept-charset='UTF-8'>
			<fieldset class="background2">
				<legend>S'identifier</legend>

				<table align="center">
					<tr>
						<th align="right"><label for='name'>Pseudo: </label></th>
						<th><input type='text' name='name' id='name' maxlength="50" /><br></th>
					</tr>
					<tr>
						<th align="right"><label for='password' >Mot de passe: </label></th>
						<th><input type='password' name='password' id='password' maxlength="20" /><br></th>
					</tr>
					<tr>
						<th><a class="blue right" href="register.php">Créer un compte</a></th>
						<th><input type='submit' name='Submit' value='Envoyer' /></th>
					</tr>
				</table>
			</fieldset>
		</form>
		<h1><?php require_once($_SERVER["DOCUMENT_ROOT"]."/Camagru/footer.php"); ?></h1>
	</body>
</html>

<?php

?>