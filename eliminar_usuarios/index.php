<?php

$host = 'localhost';
$dbname = 'usuarios';
$username = 'root';
$password = '';

try{
  $conexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password); 
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

  
  if(isset($_GET["eliminar"])){

    $id = intval($_GET["eliminar"]);

    $sql = "DELETE FROM usuarios WHERE id = :id";
    $statement = $conexion -> prepare($sql);
    $statement->execute(["id" => $id]);

    header("Location: index.php?mensaje=Usuario eliminado correctamente");
    exit;
    
  }

  if($_SERVER["REQUEST_METHOD"] === "POST"){

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];

     $sql = "INSERT INTO usuarios (id, nombre, email) VALUES (null, :nombre, :email)";

    $statement = $conexion->prepare($sql);

    $statement->execute(["nombre" => $nombre, "email" => $email]);
  
  }

  $statement = $conexion->query(" SELECT * FROM usuarios");

  $usuarios = $statement->fetchAll(PDO::FETCH_ASSOC);


}catch(PDOException $error){
    echo "Error: " . $error->getMessage();
    exit;
}


require "index.view.php"
?>