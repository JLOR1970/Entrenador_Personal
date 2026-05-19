<?php
class PlanesDeEntrenamiento
{
    public string $nombreTabla = "plan_de_entrenamiento";
    public PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function ConsultarEjercicios (
        string $calentamiento,
        string $ejercicio1,
        string $ejercicio2,
        string $ejercicio3,
        string $ejercicio4,
        string $ejercicio5,
        string $ejercicio6,
        string $ejercicio7,
        string $ejercicio8,
        string $ejercicio9,
        string $ejercicio10,
        string $estiramiento_relajacion)
    {
        $sql = "SELECT l.* FROM ejercicios AS l WHERE 1=1";

         if ($calentamiento != "\ejercicios\0calentamiento y estiramientos.png")
            $sql .= " AND id = $\ejercicios\0calentamiento y estiramientos.png";
         if ($ejercicio1 != "\ejercicios\ejercicio 1.png")
            $sql .= " AND ejercicio1 = \"$ejercicios\ejercicio 1.png\"";
         if ($ejercicio2 != "\ejercicios\ejercicio 2.png")
            $sql .= " AND ejercicio2 = \"$ejercicios\ejercicio 2.png\"";
         if ($ejercicio1 != "\ejercicios\ejercicio 1.png")
            $sql .= " AND ejercicio3 = \"$ejercicios\ejercicio 3.png\"";
         if ($ejercicio2 != "\ejercicios\ejercicio 3.png")
            $sql .= " AND ejercicio4 = \"$ejercicios\ejercicio 4.png\"";
         if ($ejercicio1 != "\ejercicios\ejercicio 5.png")
            $sql .= " AND ejercicio5 = \"$ejercicios\ejercicio 5.png\"";
         if ($ejercicio2 != "\ejercicios\ejercicio 6.png")
            $sql .= " AND ejercicio6 = \"$ejercicios\ejercicio 6.png\"";
         if ($ejercicio7 != "\ejercicios\ejercicio 7.png")
            $sql .= " AND ejercicio7 = \"$ejercicios\ejercicio 7.png\"";
         if ($ejercicio8 != "\ejercicios\ejercicio 8.png")
            $sql .= " AND ejercicio8 = \"$ejercicios\ejercicio 8.png\"";
         if ($ejercicio9 != "\ejercicios\ejercicio 9.png")
            $sql .= " AND ejercicio9 = \"$ejercicios\ejercicio 9.png\"";
         if ($ejercicio10 != "\ejercicios\ejercicio 10.png")
            $sql .= " AND ejercicio10 = \"$ejercicios\ejercicio 10.png\"";
         if ($ejercicio11estiramiento_relajacion != "\ejercicios\ejercicio11estiramiento_relajacion.png")
            $sql .= " AND ejercicio11estiramiento_relajacion = \"$ejercicio11estiramiento_relajacion\"";

       

        $respuesta = $this->pdo->query($sql)->fetchAll();
        return $respuesta;
    }
}
?>