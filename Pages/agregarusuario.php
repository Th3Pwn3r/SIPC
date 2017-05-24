<!DOCTYPE html>
<html>
<head>
	<title>Agregar usuario</title>
</head>
<body>



<form method="post" action="../action/ingresarusuario.php" id="1"></form>



<table border="2" align="center">
  <tr>
    <td><input type="text" name="rut" placeholder="Rut" maxlength="20" required form="1"></td>
  </tr>
  <tr>
    <td><input type="text" name="nombres" placeholder="Nombres" maxlength="25" required form="1"></td>
  </tr>
  <tr>
   <td><input type="text" name="apellidos" placeholder="Apellidos" maxlength="40" required form="1"></td>
  </tr>
   <tr>
   <td><input type="text" name="telefono" placeholder="Telefono" maxlength="15" required minlength="9" form="1"></td>
  </tr>
  <tr>
    <td>
    <select name="tipo" form="1">
  		<option value="1">Administrador general</option>
  		<option value="2">Jefe de zona</option>
  		<option value="3">Operador</option>
	</select>
	</td>
  </tr>
  <tr>
    <td>
    <select name="organizacion" form="1">
  		<?php
  		include "../action/connect.php";
  		$result = $conn->query("select * from instituciones");

  		while ($row = $result->fetch_assoc()) {
  			print("<option value='".$row['id_inst']."'>".$row['nom_inst']."</option>
  				  ");
  		}
  		 ?>
	</select>
	</td>
  </tr>
  <tr>
   <td><input type="text" name="uname" placeholder="Nombre de usuario" maxlength="20" required minlength="3" form="1"></td>
  </tr>
   <tr>
   <td><input type="password" name="Contrasenna" placeholder="Contrasenna" maxlength="20" minlength="3" form="1"></td>
  </tr>
  <tr>
   <td><input type="submit" value="Submit" form="1"></td>
  </tr>
</table>

<br>
*En caso de no especificar una contrasenna esta sera el mismo nombre de usuario, esta puede ser modificada en el panel de control de usuario

</body>
</html>