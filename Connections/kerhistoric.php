<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_kerhistoric = "localhost:3306";
$database_kerhistoric = "kerurquiza_2020";
$username_kerhistoric = "urquiza";
$password_kerhistoric = "7uj4Lq9?";
$kerhistoric = mysqli_connect($hostname_kerhistoric, $username_kerhistoric, $password_kerhistoric);


if(!preg_match('/admin/',$_SERVER['PHP_SELF'])) {
	if (!isset($_SESSION)) {session_start();}
	mysqli_select_db($kerhistoric, $database_kerhistoric);
	include_once "admin/funciones.php";

	
	
	if ((isset($_SESSION['MM_User_Id'])) && ($_SESSION['MM_User_Id'] != "")) {
		$id_session = $_SESSION['MM_User_Id'];
	} else {
		$id_session = session_id();	
	}
} 


$lengua = '_esp';


?>