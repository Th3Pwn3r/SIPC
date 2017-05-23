<?php
include('sec.php');
class conn{
	private static $host="localhost:3306";
	private static $uulec=enc->getu;
	private static $uplec=enc->getp;
	private static $dac="crim";
	private $cdb;

	public function consulta($cons) {
		$res=$cdb->query($cons);
		mysqli_close($this->cdb);
		return $res;
	}

	public function grabar($val) {
		$res=$cdb->query($val);
		mysqli_close($this->cdb);
	}

	public function __construct() {
		$cdb=new mysqli(self::$host , self::$uulec , self::$uplec , self::$dac);
		if ($cdb->connect_errno) {
			header("Location:adv/errbd.php");
		}
	}
}
?>