<?php
    require_once '../../conexion/bd.php';
    $nombre = $_POST['nombre'];
    $qry = "insert into colores_prd (nombre) values ('$nombre')";
    mysqli_query($mysqli, $qry);
    header("location: index.php")
?>