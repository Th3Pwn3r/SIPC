 <?php
function connect() {
    $conn = new mysqli("127.0.0.1", "sipc", "sipc", "sipc");

	if (!$conn) 
    	echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
	
		
	return $conn; 
	
}	

$conn = connect(); // call the function

?> 