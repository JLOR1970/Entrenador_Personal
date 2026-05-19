<?php
class Progreso
{
    public string $ejercicio;
    public string $repeticiones;

    public function __construct 
    (   
          string $ejercicio,
          string $repeticiones,
     )

    {
         $this->ejercicio = $ejercicio;
         $this->repeticiones = $repeticiones;         
    }
}
?>