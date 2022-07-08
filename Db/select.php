<?php
    include "connect.php";

    $consulta = "select * from incidentes";
    $resultado_consulta = mysqli_query($conexion,$consulta); 
?>