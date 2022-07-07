<?php
    include "connect.php";

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $consultaEliminar = "delete from usuarios where id = $id";
        $result = mysqli_query($conexion,$consultaEliminar);  
        if(!$result){
            die("Algo salio mal");
        }

        $_SESSION["message"] = "Se elimino correctamente";
        $_SESSION["message_type"] = "danger";
        header("Location: /MR/admin.php");        
    }         
?>