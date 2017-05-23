<?php 

if (session_status() == 1)
				{
					session_start();
					session_unset();
				}
header("Location: ../index.php");

 ?>