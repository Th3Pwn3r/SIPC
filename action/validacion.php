<?php 

include ("connect.php");

//$username = 'Admin';
//$password = 'test';

// A higher "cost" is more secure but consumes more processing power
//$cost = 10;

// Create a random salt
//$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');

// Prefix information about the hash so PHP knows how to verify it later.
// "$2a$" Means we're using the Blowfish algorithm. The following two digits are the cost parameter.
//$salt = sprintf("$2a$%02d$", $cost) . $salt;

// Value:
// $2a$10$eImiTXuWVxfM37uY4JANjQ==

// Hash the password with the salt
//$hash = crypt($password, $salt);

// Value:
// $2a$10$eImiTXuWVxfM37uY4JANjOL.oTxqp7WylW7FCzx2Lc7VLmdJIddZq

//$sql = "INSERT INTO `sipc`.`usuarios` (`rut`, `id_inst`, `idTU`, `nombre`, `apmat`, `telefono`, `usuario`, `pwmd`) VALUES ('1','1','1','1','1','1','test','".$hash."')";

//if (mysqli_query($conn, $sql)) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//}

$result = $conn->query("select * from usuarios where usuario='".$_POST['us']."'");


//if user exist
if ($row = $result->fetch_assoc())
{

	
   
	if (hash_equals($row['pwmd'],crypt($_POST['ps'],$row['pwmd'])))
		{
			if (session_status() == 1)
				{
					session_start();
				}
			elseif (session_status() == 0)
				{
					session_close();//cierra la sesion anterior
					session_start();//inicia nueva sesion
				}

			//store user values to later use them in querys

				$_SESSION['user_name'] = $row['nombre'];
				$_SESSION['id_inst'] = $row['id_inst'];
				$_SESSION['tipo_usuario'] = $row['idTU'];

			//redirect to the main menu
			header("Location: ../Pages/Menu.php");
		}
	else
	{
	print("La contrasenna ingresada no es valdia! <br>Seras redireccionado a la pagina de inicio en 5 segundos.");
	header('refresh: 5; url=../login.php');
	}
	
}else
{
	print("El usuario ingresado no existe! <br>Seras redireccionado a la pagina de inicio en 5 segundos.");
	header('refresh: 5; url=../login.php');
}


$result->close();
 ?>