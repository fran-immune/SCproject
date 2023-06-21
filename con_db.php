<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "datos";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}

conex= new SQLite3('/Users/fran/Desktop/cibersecurity/SCproject/datos.db');

?>