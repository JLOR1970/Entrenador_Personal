<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Registro</title>
</head>
<body>
    <h2>Registro de Usuario</h2>
    <form action="procesar.php" method="POST">

        <label>Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label>Apellidos:</label>
        <input type="text" name="apellidos" required><br><br>

        <label>Telefono:</label>
        <input type="int" name="telefono" required><br><br>

        <label>Direccion:</label>
        <input type="text" name="direccion" required><br><br>

        <label>Mail:</label>
        <input type="text" name="mail" required><br><br>

        <input type="submit" name="submit" value="Guardar Datos">
    </form>
</body>
</html>

<?php
// Configuración de la base de datos
$servidor = "localhost";
$usuario_db = "root";       // Cambiar si usas otro usuario
$password_db = "";          // Cambiar si tu base de datos tiene contraseña
$nombre_db = "usuario";

// 1. Crear la conexión
$conexion = new mysqli($servidor, $usuario_db, $password_db, $nombre_db);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// 2. Verificar si se envió el formulario
if (isset($_POST['submit'])) {
    // Recoger los datos del formulario y protegerlos contra inyección SQL
    $nombre = $conexion->real_escape_string($_POST['nombre']);
    $apellidos = $conexion->real_escape_string($_POST['apellidos']);
    $direccion = $conexion->real_escape_string($_POST['direccion']);
    $telefono = $conexion->real_escape_string($_POST['telefono']);
    $mail = $conexion->real_escape_string($_POST['mail']);

    // 3. Preparar la consulta de inserción
    $sql = "INSERT INTO usuarios (nombre, apellidos, direccion, telefono, mail) 
            VALUES ('$nombre', '$apellidos', '$mail')";

    // 4. Ejecutar la consulta y comprobar si fue exitosa
    if ($conexion->query($sql) === TRUE) {
        echo "Datos guardados correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
}

// 5. Cerrar la conexión
$conexion->close();
?>