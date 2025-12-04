<!DOCTYPE html>
<html>
    <head>
    <title>Concatenar variables en PHP</title>
    </head>
    <body>
        <?php
            $conexion= mysqli_connect("sql302.infinityfree.com","if0_40475251","I0aY6dMM02MfjKf","if0_40475251_naqueto");
            if(!$conexion){
                echo "Error:no se pudo conectar a MySQL";
                echo "errno de depuración: " . mysqli_connect_errno();
                echo "error de depuración: " . mysqli_connect_error();
                exit;
            }
            echo "Conexión exitosa con MySQL";
            echo "<br>";
            echo "Información del host: " . mysqli_get_host_info($conexion);
            mysqli_close($conexion);
        ?>
    </body>
</html>