<?php
$dbServer = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'blog';

$connection = new mysqli($dbServer, $dbUser, $dbPassword);
$sql = "CREATE DATABASE blog CHARACTER SET utf8 COLLATE utf8_general_ci";

if ($connection->query($sql) === TRUE)
{
	echo "Utworzono bazę 'blog'!";
}
else
{
	echo "Błąd " . $connection->error;
}

$connection->close();

?>