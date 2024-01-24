<?php
$dbServer = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'blog';

$connection = new mysqli($dbServer, $dbUser, $dbPassword, $dbName);
$sql = "SELECT username, email FROM users";

if ($result = $connection->query($sql))
{
	while($row = $result->fetch_assoc())
	{
		echo $row['username'] . ' ' . $row['email'] .'<br>';
	}
}
else
{
	echo "Błąd " . $connection->error;
}

$connection->close();

?>