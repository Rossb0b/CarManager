<?php 
/**
 * MySQL auth info
 */
$host = 'localhost';
$base = 'week19';
$user = 'root';
$pass = 'root';

try
{
  $database = new PDO("mysql:host=$host;dbname=$base", $user, $pass);
  $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}
catch(PDOException $e)
{
  die($e);
}

return $database;
