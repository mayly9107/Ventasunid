<?php
    require_once '../../conexion/bd.php';
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $consulta = "update categorias_prd  set
    nombre = '$nombre'
    where id= $id";
    mysqli_query($mysqli, $consulta);
    
    header("location: index.php")
?>