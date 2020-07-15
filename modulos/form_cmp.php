<?php
include_once("../conexion/bd.php");
if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  $usuario = $_SESSION["nombre"];
    echo $usuario;
$id = $_GET['id'];
      $consulta = "select * FROM cproductos_usr WHERE id = $id";
      $resultado = mysqli_query($mysqli, $consulta);
      $fila = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="sidenav">
    <div class="login-main-text">
        <h2>Ventas<br>Reserve su pedido</h2>
        <p>Por favor, Edite los datos necesarios.</p>
    </div>
</div>
    <div class="main">
        <div class="col-md-6 col-sm-12">
            <div id="form-usr" class="login-form">
                <form action="registro_cmp.php" method="Post">
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id" id="id"  value="<?php echo $fila['id']; ?>">
                    <input type="hidden" class="form-control" name="usuario" id="usuario"  value="<?php echo $usuario; ?>">
                    <input type="hidden" class="form-control" name="id_producto" id="id_producto"  value="<?php echo $fila['id_producto'];; ?>">
                    
                    <div class="form-group">
                        <label>Producto</label>
                    <select class="form-control" name="nombre" id="nombre">
                        <?php 
                            $qry = "select * from productos_usr";
                            $resultado2 = mysqli_query($mysqli, $qry);
                            while($fila2 = mysqli_fetch_array($resultado2)){
                        ?>  
                            <option value="<?php echo $fila2["nombre"] ?>" <?php if ($fila["id_producto"]==$fila2["id"]){ ?> selected="selected" <?php } ?>><?php echo $fila2["nombre"]; ?></option>
                        <?php } ?>
                    </select>
                </div>
                </div>
                <div class="form-group">
                    <label>Fecha de la compra</label>
                    <input type="date" class="form-control" name="fecha" id="fecha" value="<?php echo $fila['fecha']; ?>">
                </div>
                <div class="form-group">
                    <label>Cantidad</label><br/>          
                    <input type="number" name="cantidad" id="cantidad"/>
                </div>
                <div class="form-group">
                    <label>Color</label>
                    <select class="form-control" name="color" id="color">
                        <?php 
                            $consulta1 = "select * from colores_prd";
                            $resultado1 = mysqli_query($mysqli, $consulta1);
                            while($fila1 = mysqli_fetch_array($resultado1)){
                        ?>  
                            <option value="<?php echo $fila1["nombre"] ?>" <?php if ($fila["id_color"]==$fila1["id"]){ ?> selected="selected" <?php } ?>><?php echo $fila1["nombre"]; ?></option>
                        <?php } ?>
                    </select>
                </div>
                  <button type="submit" class="btn btn-secondary">Comprar</button>
                </form>
            </div>
        </div>
    </div>
    
  <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>