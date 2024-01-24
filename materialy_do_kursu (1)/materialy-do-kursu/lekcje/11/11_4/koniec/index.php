<?php
$dbServer = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'blog';

$connection = new mysqli($dbServer, $dbUser, $dbPassword, $dbName);
$sql = "CREATE TABLE users(
		id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
		username VARCHAR(20) NOT NULL,
		email VARCHAR(100) NOT NULL UNIQUE
)";

if ($connection->query($sql) === TRUE)
{
	echo "Utworzono tabelę 'users'";
}
else
{
	echo "Błąd " . $connection->error;
}

$connection->close();

?>