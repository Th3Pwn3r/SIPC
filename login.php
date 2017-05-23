<html>
	<meta charset="utf-8"/>
	<head>
		<link href="Estilos/main.css" rel="stylesheet" type="text/css">
		<title>Login</title>
	</head>
	<body class="background">
	<?php
		include("Scripts/faelements.php");
	?>
		<div class="cabecera">
			<span class="logosi">SI</span>
			<span class="logopc">PC</span>
		</div>
		<div style=""></div>
			
		<div style="margin: 0 auto 0 auto;" class="oscurecido redondeado transparente panel">
				<form action="action/validacion.php" method="post" >
					<p class="optextextras">Nombre de Usuario:</p><input type="text" class="opnestext" name="us" placeholder="Nombre de usuario"><br>
					<p class="optextextras">Contraseña:</p><input type="password" class="opnestext" name="ps" required><br><br>
					<button type="submit" class="botonr">Entrar</button><br>
					<br><a href="#recuppass">Olvidé mi contraseña</a>
				</form>
		</div>

		<div></div>
		<div></div>
	</body>
</html>