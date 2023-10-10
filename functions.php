<?php

include("conexion.php");
$linkconn = conectar();

function getAula(){
    $linkconn = conectar();
    $sql = "SELECT aula.nombre, categoria.nombre AS categoria, aula.capacidad, aula.estado FROM aula INNER JOIN categoria ON aula.id_categoria = categoria.id_categoria;
    ";
    return mysqli_query($linkconn, $sql);
}

function getCurso(){ 
    $linkconn = conectar();
    $sql = "SELECT  curso.curso , curso.division  FROM curso ";
    return  mysqli_query($linkconn, $sql);

}

function getCronograma(){
    $linkconn = conectar();
    $sql ="SELECT  cronograma.horario FROM cronograma";
    return  mysqli_query($linkconn, $sql);

}
function getCategoria(){
    $linkconn = conectar();
    $sql = "SELECT  categoria.nombre FROM categoria";
    return  mysqli_query($linkconn, $sql);

}
function getguias(){
    $linkconn = conectar();
    $sql = "SELECT  guias.nombre,guias.apellido FROM guias";
    return  mysqli_query($linkconn, $sql);

}
function getTalleristas(){
    $linkconn = conectar();
    $sql = "SELECT  talleristas.nombre,talleristas.apellido FROM talleristas";
    return  mysqli_query($linkconn, $sql);
}

function getGuiaCurso(){
    $linkconn = conectar();
    $sql = "SELECT curso.`curso`, curso.`division`, guias.nombre, guias.apellido FROM `curso` INNER JOIN guias ON curso.id_curso = guias.id_curso WHERE curso.id_curso = 3;";
    return  mysqli_query($linkconn, $sql);

}
function getDiaUno(){
    $linkconn = conectar();
    $sql = "SELECT CONVERT(horario, DATE) as 'dia',
       CONVERT(horario, TIME) as 'horario',
       actividad.nombre,
       cronograma.id_cronograma,
       aula.nombre, aula.capacidad,
        talleristas.nombre, talleristas.apellido
        FROM actividad
        INNER JOIN cronograma ON cronograma.id_actividad = actividad.id_actividad
        INNER JOIN aula ON aula.id_cronograma = cronograma.id_cronograma
        INNER JOIN talleristas ON talleristas.id_tallerista = actividad.id_tallerista
        WHERE CONVERT(horario, DATE) = '2023-10-03'
        ORDER BY CONVERT(horario, TIME)";
    return  mysqli_query($linkconn, $sql);

}

function getDiaDos(){
    $linkconn = conectar();
    $sql = "SELECT CONVERT(horario, DATE) as 'dia',
       CONVERT(horario, TIME) as 'horario',
       actividad.nombre,
       cronograma.id_cronograma,
       aula.nombre, aula.capacidad,
        talleristas.nombre, talleristas.apellido
        FROM actividad
        INNER JOIN cronograma ON cronograma.id_actividad = actividad.id_actividad
        INNER JOIN aula ON aula.id_cronograma = cronograma.id_cronograma
        INNER JOIN talleristas ON talleristas.id_tallerista = actividad.id_tallerista
        WHERE CONVERT(horario, DATE) = '2023-10-05'
        ORDER BY CONVERT(horario, TIME)";
    return  mysqli_query($linkconn, $sql);

}

function getDiaTres(){
    $linkconn = conectar();
    $sql = "SELECT CONVERT(horario, DATE) as 'dia',
       CONVERT(horario, TIME) as 'horario',
       actividad.nombre,
       cronograma.id_cronograma,
       aula.nombre, aula.capacidad,
        talleristas.nombre, talleristas.apellido
        FROM actividad
        INNER JOIN cronograma ON cronograma.id_actividad = actividad.id_actividad
        INNER JOIN aula ON aula.id_cronograma = cronograma.id_cronograma
        INNER JOIN talleristas ON talleristas.id_tallerista = actividad.id_tallerista
        WHERE CONVERT(horario, DATE) = '2023-10-22'
        ORDER BY CONVERT(horario, TIME)";
    return  mysqli_query($linkconn, $sql);

}

function getCompleto(){
    $linkconn = conectar();
    $sql = "SELECT CONVERT(horario, DATE) as dia, CONVERT(horario, TIME) as horario, actividad.nombre, cronograma.id_cronograma, aula.nombre, aula.capacidad, CONCAT(talleristas.nombre, ' ', talleristas.apellido) as NombreTalleristas FROM actividad INNER JOIN cronograma ON cronograma.id_actividad = actividad.id_actividad INNER JOIN aula ON aula.id_cronograma = cronograma.id_cronograma INNER JOIN talleristas ON talleristas.id_tallerista = actividad.id_tallerista ORDER BY CONVERT(horario, TIME);";
    return  mysqli_query($linkconn, $sql);

}
