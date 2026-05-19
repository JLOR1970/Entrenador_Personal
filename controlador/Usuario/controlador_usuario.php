<?php

class InsertadorUsuarios
{
    public string $nombreTabla = "usuario";
    public PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function InsertarUsuario (Usuario $usuario)
    {
        $pid = $usuario->id;
        $nombre = $usuario->contacto->nombre;
        $apellidos = $usuario->contacto->apellidos;
        $telefono = $usuario->contacto->telefono;
        $direccion = $usuario->contacto->direccion;
        $mail =  $usuario->contacto->mail;

        $sql = "INSERT INTO $this->nombreTabla (id, contacto_nombre, contacto_apellidos, contacto_telefono, contacto_direccion, contacto_mail)".
        "VALUES (\"$pid\", \"nombre\", \"$apellidos\", \"$telefono\", \"$direccion\", \"$apellidos\", \"$mail\")";

        $respuesta = $this->pdo->exec($sql);
    }
}
?>