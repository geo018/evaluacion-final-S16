<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Comentarios</h1>

    <div class="comentarios">

      <?php foreach ($comentarios as $comentario){ ?>
        <div class="comentario">

          <p><strong><?php echo $comentario['nombre']; ?></strong></p>
          <p><?php echo $comentario['comentario']; ?></p>
          <a href="editar.php?id=<?php echo $comentario['id']; ?>" class="btn-editar">Editar</a>

        </div>
      <?php } ?>

    </div>
    
  
<!--      <div class="comentarios">
      <div class="comentario">
        <p><strong>jaime</strong></p>
        <p>este es un comentario de ejemplo</p>
        <a href="#" class="btn-editar">Editar</a>
      </div>
      <div class="comentario">
        <p><strong>juan</strong></p>
        <p>este es un comentario de ejemplo</p>
        <a href="#" class="btn-editar">Editar</a>
      </div>
      <div class="comentario">
        <p><strong>alex</strong></p>
        <p>este es un comentario de ejemplo</p>
        <a href="#" class="btn-editar">Editar</a>
      </div>
    </div>  -->

</body>
</html>