<?php
    require_once "conexion.php";
    $obj=new conectar();
    $conexion=$obj->conexion();
    $id=$_GET['id'];
    $sql="SELECT nombre,apellido
                from t_persona where id='$id'";
    $result=mysqli_query($conexion,$sql);
    $ver=mysqli_fetch_row($result);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="procesos/actualizar.php" method="post">
        <input type="text" hidden="" value="<?php echo $id ?>" name="id">
        <label for="">Nombre</label>
        <p></p>
        <input type="text" name="txtnombre" value="<?php echo $ver[0] ?>">
        <p></p>
        <label for="">Apellido</label>
        <p></p>
        <input type="text" name="txtapellido" value="<?php echo $ver[1] ?>">
        <p></p>
        <button>Agregar</button>
    </form>
    
</body>
</html>