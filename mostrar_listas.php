<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudiantes</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <h1>Lista de Estudiantes</h1>
    <?php
        $archivo = 'estudiantes.txt';

        if (file_exists($archivo)) {
            $contenido = file($archivo);

            echo "<table>";
            echo "<tr><th>Nombre</th><th>Edad</th><th>Grado</th></tr>";

            // Saltar la primera línea (encabezados)
            for ($i = 1; $i < count($contenido); $i++) {
                $linea = $contenido[$i];
                list($nombre, $edad, $grado) = explode(',', $linea);
                echo "<tr>";
                echo "<td>" . trim($nombre) . "</td>";
                echo "<td>" . trim($edad) . "</td>";
                echo "<td>" . trim($grado) . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "El archivo no existe.";
        }
    ?>
</body>
</html>