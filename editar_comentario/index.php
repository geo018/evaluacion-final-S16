<?php
$host = 'localhost';
$dbname = 'comentarios';
$username = 'root';
$password = '';

try {
    $conexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    $statement = $conexion->query("SELECT * FROM comentarios");

    $comentarios = $statement->fetchAll();
 

} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
  }

    require "index.view.php"
?>

