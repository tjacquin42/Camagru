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
		<form class="register" id='register' accept-charset='UTF-8'>
			<fieldset class="background2">
				
				<video id="video"></video>
				<br>
				<button id="startbutton">Prendre une photo</button>
				<canvas id="canvas"></canvas>
				<img src="" id="photo" alt="photo">

			</fieldset>
		</form>
		<h1><?php require_once($_SERVER["DOCUMENT_ROOT"]."/Camagru/footer.php"); ?></h1>
		<script type="text/javascript" src="../js/camera.js"></script>
	</body>
</html>