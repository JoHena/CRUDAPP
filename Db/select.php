<?php
    /*Busqueda */
    include "connect.php";
    $consulta = "select * from usuarios";
    $resultado_consulta = mysqli_query($conexion,$consulta); 

?>