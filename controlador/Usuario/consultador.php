<?php
class ConsultadorUsuarios
{
    public string $nombreTabla = "usuario";
    public PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function ConsultarUsuario(int $id)
    {
        $sql = "SELECT * FROM $this->nombreTabla WHERE id = $id";
        $respuesta = $this->pdo->query($sql)->fetchAll();
        return $respuesta;
    }
}
?>