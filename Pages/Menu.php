<html>
	<meta charset="utf-8">
	<head>
		<link href="includes/mdd.css" rel="stylesheet" type="text/css">
		<link href="includes/graphics.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="../Scripts/jquery-1.7.2.min.js" ></script>
		<script type="text/javascript" src="../Scripts/rldr-1.0.js" ></script>
		<script type="text/javascript" src="../Scripts/stools-1.0.js" ></script>

		<!-- Add mousewheel plugin (this is optional) -->
		<script type="text/javascript" src="../Scripts/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

		<!-- Add fancyBox -->
		<link rel="stylesheet" href="../Scripts/fancybox/source/jquery.fancybox.css?v=2.1.6" type="text/css" media="screen" />
		<script type="text/javascript" src="../Scripts/fancybox/source/jquery.fancybox.pack.js?v=2.1.6"></script>

		<!-- Optionally add helpers - button, thumbnail and/or media -->
		<link rel="stylesheet" href="../Scripts/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
		<script type="text/javascript" src="../Scripts/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
		<script type="text/javascript" src="../Scripts/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

		<link rel="stylesheet" href="../Scripts/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
		<script type="text/javascript" src="../Scripts/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
		<script type="text/javascript" src="../Scripts/fancybox/fancyboxloader.js"></script>

		<title>Menú</title>
	</head>
	<body class="body" onload="cargar('#panel','#home'); startTime()">
	<?php
		include ('vist.php');
		session_start();

		if($_SESSION['user_name']==null)header("Location: ../index.php");
	?>
		<div class="opac menubar" id="barramenu">
			<div class="align textocentrado">
				<span class="cabecera logosi">SI</span><span class="cabecera logopc">PC</span><br>
				<span class="about">version 1.0-r052117b</span><br><br>
			</div>
			<div class="margmenu">
			
			
				<tr>
        			<td>
          				<label class="menusec">Menú</label><br><br>
        			</td>
      			</tr>
      		

      		<script type="text/javascript">
      			function visibility (int value)
      			{
      				document.getElementById("usadmin").style.visibility = hidden;
      			}
      		</script>
      			

				<?php 

				/*
				Kinds of usuary:
				1-Administrador general
				2-Jefe de zona
				3-Operador
				*/

				if ($_SESSION['tipo_usuario']==1) 
				{
				print(
				"<button type='button' class='menubot' onclick=\"visibility(0)\">Administrar Usuarios</button><br>
      			<button type='button' class='menubot' onclick=\"cargar('#panel','#insadmin');\">Administrar Instituciones</button><br>
      			<button type='button' class='menubot' onclick=\"cargar('#panel','#monadmin');\">Administrar Sectores</button><br>
				<button type='button' class='menubot' onclick=\"cargar('#panel','#indadmin');\">Ingresar datos</button><br><br>
				<button type='button' class='menubot' onclick=\"cargar('#panel','#repadmin');\">Reportes</button><br>"
				);
				}elseif($_SESSION['tipo_usuario']==2)
				{
				print(
				"<button type='button' class='menubot' onclick='cargar('#panel','#usadmin');'>Administrar Usuarios</button><br>
      			<button type='button' class='menubot' onclick='cargar('#panel','#monadmin');'>Administrar Sectores</button><br>
				<button type='button' class='menubot' onclick='cargar('#panel','#indadmin');'>Ingresar datos</button><br><br>
				<button type='button' class='menubot' onclick='cargar('#panel','#repadmin');'>Reportes</button><br>"
				);
				}elseif($_SESSION['tipo_usuario']==3)
				{
				print(
				"<button type='button' class='menubot' onclick='cargar('#panel','#indadmin');'>Ingresar datos</button><br><br>"
				);
				}

				?>

			</div>
		</div>
		<div id="userbar" class="userbox">
			<?php
				include ('../Scripts/userbehavior.php');
			?>
		</div>
		<div id="panel"></div>
	</body>
</html>