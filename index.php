<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CRUDAPP/style.css">
    <script src="https://kit.fontawesome.com/122542a012.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>

    <h1>Incidentes</h1>

    <div class="input-table">

        <section class="input-form">
            <form action="">
                <h2>Consluta</h2>
                <div class="form-element">
                    <label for="date">Fecha:</label>
                    <input type="date" id="date">
                </div>
                <div class="form-element">
                    <label for="desc">Descripción</label>
                    <input type="text" id="desc" placeholder="Ingresar la descripción.">
                </div>
                <div class="form-element">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" placeholder="Ingrese el nombre.">
                </div>
                <div class="form-element">
                    <label for="acciones">Acciones</label>
                    <input type="text" id="acciones" placeholder="Ingrese acciones.">
                </div>
                <div class="form-element">
                    <label for="password">Estados</label>
                    <div class="estados-btn">
                        <input type="radio" id="abierto" name="estado" value="abierto" checked>
                        <label for="abierto">Abierto</label>

                        <input type="radio" id="cerrado" name="estado" value="cerrado">
                        <label for="cerrado">Cerrado</label>
                    </div>

                </div>

                <button type="submit">Enviar</button>
            </form>

        </section>

        <div class="input-section">
            <div class="filtrar">
                <h3>Filtrar: </h3>
                <div class="estados-btn">
                    <input type="radio" id="todo" name="filter" value="todo" checked>
                    <label for="todo">Todo</label>

                    <input type="radio" id="abiertofil" name="filter" value="abierto">
                    <label for="abiertofil">Abierto</label>

                    <input type="radio" id="cerradofil" name="filter" value="cerrado">
                    <label for="cerradofil">Cerrado</label>
                </div>
            </div>

            <table>
                <tr class="top-columns">
                    <th>Fecha</th>
                    <th>Descripción</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                    <th>Estado</th>
                </tr>
                <?php
                include "../CRUDAPP/Db/select.php";

                while ($mostrar = mysqli_fetch_array($resultado_consulta)) {
                ?>
                    <tr class="table-row">
                        <td><?php echo $mostrar['id'] ?></td>
                        <td><?php echo $mostrar['username'] ?></td>
                        <td><?php echo $mostrar['email'] ?></td>
                        <td><?php echo $mostrar['password'] ?></td>
                        <td class="command">
                            <a href="../CRUDAPP/?php echo $mostrar['id']?>" id="basura" class="table-info basura-actualizar">Borrar</a>
                            <a href="../MR/Db/actualizar.php?id=<?php echo $mostrar['id'] ?>" id="actualizar" class="table-info basura-actualizar">Modificar</a>
                        </td>
                    </tr>
                <?php

                }

                ?>

            </table>

        </div>

    </div>

</body>

</html>