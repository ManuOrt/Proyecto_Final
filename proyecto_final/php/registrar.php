<?php

$conex = mysqli_connect("localhost", "root", "", "software");


if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['password']) >= 1) {
         $name =trim($_POST['nombre']);  
         $email =trim($_POST['password']);
         $fechareg = date("d/m/y");
         $consulta = "INSERT INTO datos(nombre, contrasena, fecha_reg) VALUES ('$name','$email','$fechareg')";  
         $resultado = mysqli_query($conex,$consulta);
         if ($resultado) {
            ?>
            <h3>¡ Te has inscrito correctamente !</h3>
            <?php
            }else {
                ?>
                <h3>¡ NO te has inscrito !</h3>
                <?php
            
         }
        }else {
            ?>
            <h3>¡Porfavor complete los campos!</h3>
            <?php
        }

    }
  


?>