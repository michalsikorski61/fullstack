<?php
$dbServer = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'blog';

$connection = new mysqli($dbServer, $dbUser, $dbPassword, $dbName);
$sql = "SELECT * FROM posts p
		INNER JOIN users u
		ON p.author_id = u.id
		WHERE author_id = 1;
";

if ($result = $connection->query($sql))
{
	while($row = $result->fetch_assoc())
	{
		echo $row['title'] . ' ' . $row['content'] . ' ' . $row['username'] . ' ' . $row['email'] . '<br>';
	}
}
else
{
	echo "Błąd " . $connection->error;
}

$connection->close();

?>