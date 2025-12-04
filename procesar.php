<!DOCTYPE html>
<html>
<head>
    <title>Procesar formulario libro de visitas</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        $nombre_post = $_POST['campoNombre'];
        $comentario_post = $_POST['campoComentario'];

        $conexion = mysqli_connect(
            "sql210.infinityfree.com",
            "if0_40590838",
            "HlvzCtJMQVUrC",
            "if0_40590838_interactivo"
        );

        if (!$conexion) {
            echo "Error: no se pudo conectar a MySQL<br>";
            echo "errno: " . mysqli_connect_errno() . "<br>";
            echo "error: " . mysqli_connect_error();
            exit;
        }

        $nombre_seguro = mysqli_real_escape_string($conexion, $nombre_post);
        $comentario_seguro = mysqli_real_escape_string($conexion, $comentario_post);

        $sql = "INSERT INTO visitantes(nombre, comentario)
                VALUES ('$nombre_seguro', '$comentario_seguro')";

        if (mysqli_query($conexion, $sql)) {
            echo "<h3>¡Felicidades $nombre_post!</h3>";
            echo "<p>Tu registro fue guardado exitosamente.</p>";
        } else {
            echo "Error al guardar los datos:<br>" . mysqli_error($conexion);
        }

        mysqli_close($conexion);
    ?>

    <p><strong>Nombre:</strong> <?php echo $nombre_post; ?></p>
    <p><strong>Comentario:</strong> <?php echo $comentario_post; ?></p>

    <a href="listado.php">Ir a listado</a><br>
    <a href="Interactiva.html">Ir al interactivo</a>
</body>
</html>
