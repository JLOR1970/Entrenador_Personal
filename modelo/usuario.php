<?php
class Usuario
{
    public string $id;
    public string $nombre;
    public string $apellidos;
    public Progreso $Progreso;
    public Contacto $contacto;

    public function __construct 
    (   
          string $id,
          string $nombre,
          string $apellidos,
          string $Progreso,
    )

    {
         $this->id = $id;
         $this-> $nombre;
         $this->$apellidos;
         $this->progreso = $Progreso;
         $this->contacto = new Contacto ($telefono,
                                         $direccion,
                                         $mail,
         ); 
    }
}

?>