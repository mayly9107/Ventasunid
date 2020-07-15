<?php
require_once '../../conexion/bd.php';

$id = $_GET['id'];
      $consulta = "SELECT * FROM colores_prd WHERE id = $id";
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
    <link rel="stylesheet" href="../../css/style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="sidenav">
    <div class="login-main-text">
        <h2>Blog<br>Editar el color</h2>
        <p>Por favor, Edite los datos necesarios.</p>
    </div>
</div>
    <div class="main">
        <div class="col-md-6 col-sm-12">
            <div id="form-usr" class="login-form">
                <form action="edit_cat.php" method="Post">
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id" id="id"  value="<?php echo $fila['id']; ?>">
                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $fila['nombre']; ?>">
                </div>
                <button type="submit" class="btn btn-secondary">Modificar</button>
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