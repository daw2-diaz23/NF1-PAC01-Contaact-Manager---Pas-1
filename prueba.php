<?php
$host = 'localhost';
$port = '5432';
$dbname = 'php';
$user = 'postgres';
$password = 'root';

$db = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
if (!$db) {
    die('Unable to connect to the database.');
}

echo "Connected successfully to the PostgreSQL database.";

// Perform your database operations here

pg_close($db);
?>