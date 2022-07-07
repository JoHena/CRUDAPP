<?php
    include('connect.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "select * from incidentes where id = $id";
        $result = mysqli_query($conexion,$query);
        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result);
            $date = $row['fecha'];
            $desc = $row['descripcion'];
            $nombre = $row['nombre'];
            $accion = $row['acciones'];
            $mod = $row['modifica'];
        }
    }

    if(isset($_POST['actualizar'])){
        if(strlen($_POST['desc']) >= 1 && strlen($_POST['name']) >= 1 && strlen('act') >= 1 && strlen('state') >= 1)
        $id = $_GET['id'];
        $date = trim($_POST['date']);
        $desc = trim($_POST['desc']);
        $nombre = trim($_POST['name']);
        $accion = trim($_POST['act']);
        $state = trim($_POST['state']);
        $mod = trim($_POST['mod']);
    
        $query = "update incidentes set fecha = '$date', descripcion='$desc', nombre = '$nombre', acciones = '$accion', estado = '$state', modifica = '$mod' where id = $id";
        mysqli_query($conexion,$query);
        header("Location: /CRUDAPP/index.php");
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
    <link rel="stylesheet" href="../modificar.css">
</head>
<body>
    <div class="input-form">
    <form action = "modificar.php?id=<?php echo $_GET['id']; ?>" method="post">
                <h2>Consluta</h2>
                <div class="form-element">
                    <label for="date">Fecha:</label>
                    <input type="date" name="date" id="date" value="<?php echo $date ?>" required>
                </div>
                <div class="form-element">
                    <label for="desc">Descripción</label>
                    <input type="text" id="desc" name="desc" placeholder="Ingresar la descripción." value="<?php echo $desc ?>" required>
                </div>
                <div class="form-element">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="name" placeholder="Ingrese el nombre." value="<?php echo $nombre ?>" required>
                </div>
                <div class="form-element">
                    <label for="acciones">Acciones</label>
                    <input type="text" id="acciones" name="act"placeholder="Ingrese acciones." value="<?php echo $accion ?>" required>
                </div>
                <div class="form-element">
                    <label for="acciones">Razón de modificación</label>
                    <input type="text" id="mod" name="mod" placeholder="Ingresar información" value="<?php echo $mod ?>" required>
                </div>
                <div class="form-element">
                    <label for="state">Estados</label>
                    <div class="estados-btn">
                        <input type="radio" id="abierto" name="state" value="abierto" required>
                        <label for="abierto">Abierto</label>

                        <input type="radio" id="cerrado" name="state" value="cerrado" required>
                        <label for="cerrado">Cerrado</label>
                    </div>

                </div>

                <button type="submit" name="actualizar">Modificar</button>
            </form>
    </div>

</body>

</html>