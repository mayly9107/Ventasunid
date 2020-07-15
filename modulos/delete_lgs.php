<?php
    require_once '../conexion/bd.php';
    $id = $_GET['id'];
    $consulta = "delete from compras_lgs where id = $id ";
    mysqli_query($mysqli, $consulta);
    header('location: compras_lgs.php');
?>