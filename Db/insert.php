<?php


include "connect.php";

if (!$conexion) {
    die("Conexion fallida: " . mysqli_connect_error());
}

if(isset($_POST['registrar'])){
    if(strlen($_POST['username']) >= 1 && strlen($_POST['email']) >= 1 && strlen('password') >= 1){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $query = "insert into usuarios(username,email,password) values('$username','$email','$password')";
    
        mysqli_query($conexion,$query);
    }
}

?>
