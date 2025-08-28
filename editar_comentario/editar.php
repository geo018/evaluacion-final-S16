<?php

$host = 'localhost';
$dbname = 'comentarios';
$username = 'root';
$password = '';

try {
    $conexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    if (isset($_GET['id'])) {

      $id = $_GET['id'];
 
      $sql = "SELECT * FROM comentarios WHERE id = :id";

      $statement = $conexion->prepare($sql);

      $statement->execute(['id' => $id]);

      $comentario = $statement->fetch();

      if ($_SERVER['REQUEST_METHOD'] == 'POST') {

          $nombre = $_POST['nombre'];
          $comentario_texto = $_POST['comentario'];


          $sql = "UPDATE comentarios SET nombre = :nombre, comentario = :comentario WHERE id = :id";

          $statement = $conexion->prepare($sql);

          $statement->execute([
              'nombre' => $nombre,
              'comentario' => $comentario_texto,
              'id' => $id
          ]);

          header("Location: index.php");
      }

    } else {
      echo "Comentario no encontrado.";
    }


} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}



require "editar.view.php"
?>


