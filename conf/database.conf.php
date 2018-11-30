<?php 
$host = 'localhost';
$base = 'week19';
$user = 'root';
$pass = 'root';
$options = [ 
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC            
];

try
{
  $database = new PDO("mysql:host=$host;dbname=$base", $user, $pass, $options);
}
catch(PDOException $e)
{
  die($e);
}

return $database;
