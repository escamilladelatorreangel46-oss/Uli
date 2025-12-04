<!DOCTYPE html>
<html>

<head>
    <meta charset = "UTF-8" />

    <title>Listado</title>

    <style>


        .header {
			background-color: #e65151;
			color:#fff;
			padding:14px;
			border-radius:8px;
			text-align:center;
			margin:20px auto 10px;
			max-width:720px;
		}

        .contenedor {
			max-width:720px;
			margin:0 auto;
			padding:20px;

			background-color:#56070c;
			border:1px solid #7c2323;
			border-radius:12px;
			padding:20px;
			box-shadow: 0 6px 18px rgba(0,0,0,0.4);
		}

        .btn {
			background-color: #8B1F1F;
			color:#fff;
			border:none;
			padding:10px 16px;
			border-radius:8px;
			font-size:16px;
		}

		.btn:hover {
			background-color: #A52A2A;
		}

       
        table#table {
            width: 100%;
            border-collapse: collapse;
        }
        table#table th,
        table#table td {
            border: 1px solid #8B1F1F;
            padding: 6px 8px;
            text-align: left;
        }
        table#table th {
            background: #8B1F1F;
            color: #fff;
            font-weight: 600;
        }
        table#table tr:hover {
            background: #7c2323;
            color: #fff;
        }

        body {
            background-color: #7c2323;
        }

    </style>

</head>

<body>

    <?php
     $conexion= mysqli_connect("sql302.infinityfree.com","if0_40475251","I0aY6dMM02MfjKf","if0_40475251_naqueto");

    if(!$conexion){
        echo "Error: Nose pudo conectar a MySQL.";
        echo "errno de depuracion: " . mysqli_connect_errno();
        echo " error de depuracion: " . mysqli_connect_error();
        exit;

    }

    $resultado = mysqli_query($conexion, "SELECT id, nombre, comentario FROM visitantes");

    ?>

    <div class = "header">
        <h1>Registros</h1>
    </div>

    <div class = "contenedor" >
        <table id = "table">
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>cometario</th>
               
                
            <tr>
            <?php
            while($fila = $resultado->fetch_assoc()){
                $id = $fila['id'];
                $nombre = $fila['nombre'];
                $comentario = $fila['comentario'];
                

                echo "<tr>";
                echo "<td>";
                echo $fila['id'];
                echo "</td>";
                echo "<td>";
                echo $fila['nombre'];
                echo "</td>";
                echo "<td>";
                echo $fila['comentario'];
                echo "</td>";
                echo "</tr>";

                
            };
            mysqli_close($conexion);
            
            
            ?>

        <table>
        
        <br>
        <a class="btn" href="cfmoto.html">Regresar al interactivo</a>
    </div>
</body>

</html>