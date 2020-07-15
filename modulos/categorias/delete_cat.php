<?php
    require_once '../../conexion/bd.php';
    $id = $_GET['id'];
    $consulta = "delete from categorias_prd where id = $id ";
    mysqli_query($mysqli, $consulta);
    header('location: index.php');
?>