<?php
$dbServer = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'blog';

$connection = new mysqli($dbServer, $dbUser, $dbPassword);
print_r($connection);

?>