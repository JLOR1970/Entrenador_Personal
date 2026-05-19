<!DOCTYPE HTML>
<html>  
<body>

<form action="welcome.php" method="post">
Name: <input type="text" name="nombre"><br>
Apellidos: <input type="text" name="apellidos"><br>
Telefono: <input type="text" name="telefonol"><br>
Direccion: <input type="text" name="direccion"><br>
Mail: <input type="text" name="mail"><br>
<input type="submit">
</form>

</body>
</html>

<?php
if(isset($_POST[Usuario]))
{
    $usuario = new Usuario("",
                            $_POST["nombre"],
                            $_POST["apellidos"],
                            $_POST["telefono"],
                            $_POST["direccion"],
                            $_POST["mail"]);
    $insertadorDeUsuarios->InsertarUsuario($usuario);
}
?>

<h1>Nuevo usuario</h1>
<form action="index.php" method="POST">
<?php
require_once("vista/plantillas/input.php");
require_once("vista/plantillas/boton.php");

MostrarInputText("nombre", "Nombre", "nombre");
MostrarInputText("apellidos", "Apellidos", "apellidos");
MostrarInputText("telefono", "Telefono", "telefono");
MostrarInputText("direccion", "Direccion", "direccion");
MostrarInputText("mail", "Mail", "mail");
MostrarBoton("Insertar", "submit");
?>
</form>

