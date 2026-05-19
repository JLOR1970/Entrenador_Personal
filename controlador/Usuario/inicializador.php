<?php
//controlador
require_once("controlador/usuarios/insertador_usuario.php");
require_once("controlador/usuarios/consultador.php");
require_once("controlador/programas/iniciador_entrenamiento.php");
require_once("controlador/programas/controlador_entrenamiento.php");
require_once("controlador/programas/historial_entrenamiento.php");

require_once("controlador/base-de-datos.php");

if (!isset($insertadorDeUsuarios))
{
    $insertadorDeUsuarios = new InsertadorUsuarios($pdo);
}
if (!isset($consultadorDeUsuarios))
{
    $consultadorDeUsuarios = new ConsultadorUsuarios($pdo);
}

?>