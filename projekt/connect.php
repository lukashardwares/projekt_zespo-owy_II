<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="32948172_projekt_zespolowy";

$conn=new mysqli($dbhost,$dbuser,$dbpass,$db);


if($conn->connect_error)
{
	echo "Błąd połączenia z bazą danych";
}
else{
//	echo "GOOD";

$conn->set_charset("utf8");
}

?>