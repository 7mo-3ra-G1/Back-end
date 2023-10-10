<?php
    include 'conexion.php';


$conn = conectar();


$sql = "SELECT aula.nombre, categoria.nombre AS categoria, aula.capacidad, aula.estado FROM aula INNER JOIN categoria ON aula.id_categoria = categoria.id_categoria";


$result = $conn->query($sql);

 
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>Aula";

        while ($row = $result->fetch_assoc()) {
            
                echo "<td>" . $row["nombre"] . "</td>";
                                echo "<td>" . $row["categoria"] . "</td>";

            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontraron resultados.";
    }

;
    
    
$sql = "SELECT actividad.nombre ,actividad.duracion FROM actividad INNER JOIN cronograma ON actividad.id_actividad = cronograma.id_actividad";


$result = $conn->query($sql);

 
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>Aula";

        while ($row = $result->fetch_assoc()) {
            
                echo "<td>" . $row["nombre"] . "</td>";
                                echo "<td>" . $row["duracion"] . "</td>";

            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontraron resultados.";
    }


    
    




?>
