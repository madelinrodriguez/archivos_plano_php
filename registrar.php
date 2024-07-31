<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Estudiante</title>
</head>
<body>
    <h1>Registrar Estudiante</h1>
    <form action="registrar.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required><br><br>

        <label for="grado">Grado:</label>
        <input type="text" id="grado" name="grado" required><br><br>

        <input type="submit" value="Registrar">

        <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $grado = $_POST['grado'];

    // Abre el archivo en modo de añadir
    $archivo = 'estudiantes.txt';
    $linea = $nombre . ',' . $edad . ',' . $grado . "\n";

    // Escribe la línea en el archivo
    file_put_contents($archivo, $linea, FILE_APPEND);

    echo "Estudiante registrado correctamente.";
} else {
    echo "Método de solicitud no permitido.";
}
?>
    </form>
</body>