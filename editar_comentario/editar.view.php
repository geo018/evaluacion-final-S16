<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Comentario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Editar Comentario</h1>

  
  <form action="editar.php?id=<?php echo $comentario['id']; ?>" method="POST">

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" value="<?php echo $comentario['nombre']; ?>" required>

    <label for="comentario">Comentario:</label>
    <textarea name="comentario" id="comentario" required><?php echo $comentario['comentario']; ?></textarea>

    <button type="submit">Actualizar Comentario</button>
  </form>

  <!-- 
  <form>
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" value="Aqui va el nombre" required>
    <label for="comentario">Comentario:</label>
    <textarea name="comentario" id="comentario" required> Aqui va el comentario </textarea>

    <button type="submit">Actualizar Comentario</button>
  </form> -->

  <a href="index.php" class="btn">Volver</a>

</body>
</html>