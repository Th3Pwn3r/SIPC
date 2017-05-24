<?php 

include "connect.php";

$query = "select * from usuarios where usuario='".$_POST['uname']."'";

$resultado=$conn->query($query);

if(mysqli_num_rows($resultado)==0)
{
	//no existe el usuario, crearlo 

	$cost = 10;

	// Create a random salt
	$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');

	// Prefix information about the hash so PHP knows how to verify it later.
	// "$2a$" Means we're using the Blowfish algorithm. The following two digits are the cost parameter.
	$salt = sprintf("$2a$%02d$", $cost) . $salt;

	// Hash the password with the salt
	$hash = crypt($_POST['Contrasenna'], $salt);


	$sql = "INSERT INTO `sipc`.`usuarios` (`rut`, `id_inst`, `idTU`, `nombres`, `apellidos`, `telefono`, `usuario`, `pwmd`) VALUES ('".$_POST['rut']."',".$_POST['organizacion'].",".$_POST['tipo'].",'".$_POST['nombres']."','".$_POST['apellidos']."','".$_POST['telefono']."','".$_POST['uname']."','".$hash."')";


	if (mysqli_query($conn, $sql)) {
	    echo "Nueva entrada ingresada.. <br>retornando a la pantalla anterior en 5 segundos.";
	    header('refresh: 5; url=../Pages/agregarusuario.php');
	} else {
	   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
									}
else
{
	//el usuario eaxiste, error!
}

$resultado->close();
 ?>