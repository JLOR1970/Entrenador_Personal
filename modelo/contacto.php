<?php
class Contacto
{
    public string $telefono;
    public string $direccion;
    public string $mail;

    public function __construct 
    (   
          string $telefono,
          string $direccion,
          string $mail,
     )

    {
         $this->telefono = $telefono;
         $this->direccion = $direccion;
         $this->mail = $mail;
         
    }
}
?>
