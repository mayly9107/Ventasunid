<?php
    require_once '../conexion/bd.php';
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $color = $_POST['color'];
    $usuario = $_POST['usuario'];
    $fecha = $_POST['fecha'];
    $cantidad = $_POST['cantidad'];
    $id_producto = $_POST['id_producto'];
    
    $qry = "insert into compras_lgs (producto, color, nombre, fecha, cantidad, id_producto, id_cproducto) values ('$nombre','$color','$usuario','$fecha','$cantidad', '$id_producto', '$id')";
    mysqli_query($mysqli, $qry);

    /*$qry2 = "update cproductos_usr p 
    INNER JOIN compras_lgs c on c.id_producto=p.id_producto
    set p.stock = p.stock - c.cantidad
    where p.id=".$id;
    mysqli_query($mysqli, $qry2);*/
    header("location: compras_lgs.php")
?>