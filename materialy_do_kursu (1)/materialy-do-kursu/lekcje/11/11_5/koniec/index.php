<?php
$dbServer = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'blog';

$connection = new mysqli($dbServer, $dbUser, $dbPassword, $dbName);
$sql = "INSERT INTO users(id, username, email) VALUES
		(NULL, 'jan234', 'jan234@strefakursow.pl'),
		(NULL, 'adrian', 'adrian@strefakursow.pl') 
";

if ($connection->query($sql) === TRUE)
{
	echo "Dodano użytkowników";
}
else
{
	echo "Błąd " . $connection->error;
}

$connection->close();

?>