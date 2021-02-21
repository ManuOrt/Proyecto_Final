<?php

$conex = mysqli_connect("localhost", "root", "", "software");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar datos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    
    <br>
<h1>Bienvenido a los registros de nuestros administradores</h1>
<br>
    
<table class="table">
    <div class="container">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Contraseña</th>
            <th scope="col">Fecha de registro</th>
            </tr>
        </thead>
        <?php
        $sql="SELECT * from datos";
        $result=mysqli_query($conex,$sql);
        while($mostrar=mysqli_fetch_array($result)){
        ?>
            <tr>
            <td><?php echo $mostrar['id']?></td>
            <td><?php echo $mostrar['nombre']?></td>
            <td><?php echo $mostrar['contrasena']?></td>
            <td><?php echo $mostrar['fecha_reg']?></td>
            </tr>
            <?php
        }
            ?>
    </div>
</table>
</body>
</html>