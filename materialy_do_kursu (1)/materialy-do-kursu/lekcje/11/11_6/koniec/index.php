<?php
$dbServer = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'blog';

$connection = new mysqli($dbServer, $dbUser, $dbPassword, $dbName);
$sql = "INSERT INTO posts(id, title, content, author_id) VALUES 
		(NULL, 'Tworzenie aplikacji Android', 'Zawartość wpisu', 1),
		(NULL, 'Sprawdź naszą aplikację mobilną', 'Zawartość wpisu', 1),
		(NULL, 'Nowości JavaScript ES6', 'Zawartość wpisu', 2)
";

if ($connection->query($sql) === TRUE)
{
	echo "Dodano nowe wpisy";
}
else
{
	echo "Błąd " . $connection->error;
}

$connection->close();

?>