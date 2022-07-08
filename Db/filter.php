<?php
    include "connect.php";
    $consulta = "select * from incidentes";
    $resultado_consulta = mysqli_query($conexion,$consulta); 


if(isset($_POST['filtrar-submit'])) {
    $state = $_POST['filter'];
    if($state == "cerrado"){
        $consulta = "select * from incidentes where estado = 'abierto'";
        $resultado_consulta = mysqli_query($conexion,$consulta); 
    } else if($state == 'abierto'){
        $consulta = "select * from incidentes where estado = 'cerrado'";
        $resultado_consulta = mysqli_query($conexion,$consulta); 
    } 
    header("Location: /CRUDAPP/index.php");   
}
?>