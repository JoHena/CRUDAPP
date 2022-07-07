<?php
    include('connect.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "select * from usuarios where id = $id";
        $result = mysqli_query($conexion,$query);
        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result);
            $username = $row['username'];
            $email = $row['email'];
            $password = $row['password'];
        }
    }

    if(isset($_POST['actualizar'])){
        if(strlen($_POST['username']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1){
            $id = $_GET['id'];
            $username = trim($_POST['username']);
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
    
            $registros = "update usuarios set username = '$username', email='$email', password = '$password' where id = $id";
            mysqli_query($conexion,$registros);        
            header("Location: ../admin.php");           
        } 
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/admin.css">
    <title>Actualizar</title>
</head>
<body>
<nav id="nav-bar">
        <div id="nav-search">
            <div id="site-name">MR</div>
            <input type="text" placeholder="Buscar...">
        </div>

        <div class="nav-links">
            <div class="dropdown" data-dropdown>
                <img src="../MR/img/HEN.png" alt="Profile-picture" class="profile-img" data-dropdown-btn>
                <div class="dropdown-menu">
                    <div class="triangle"></div>
                    <ul>
                        <li><a id="show-login" class="profile-tab" href="#">Iniciar Sesión</a></li>
                        <li><a class="profile-tab" id="show-register" href="#">Registrarse</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <main id="main">
            <div class="input-field">
            <form  action="actualizar.php?id=<?php echo $_GET['id']; ?>" method="post">
                <div class="form-element">
                    <label for="username">Nombre de Usuario:</label>
                    <input id="username" name="username" type="text" value="<?php echo $username ?>">
                </div>
                <div class="form-element">
                    <label for="remail">Email:</label>
                    <input id="remail" name="email" type="text" value="<?php echo $email ?>">
                </div>
                <div class="form-element">
                    <label for="rpassword">Contraseña:</label>
                    <input id="rpassword" name="password" type="password" value="<?php echo $password ?>">
                </div>
                <button id="insertar-btn" type="submit" name="actualizar" value="Actualizar">Aceptar</button>
            </form>
        </div>
    </main>
</body>
</html>