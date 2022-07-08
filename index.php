<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CRUDAPP/style.css">
    <script src="https://kit.fontawesome.com/122542a012.js" crossorigin="anonymous"></script>
    <title>Incidentes</title>
</head>

<body>

    <h1>Incidentes</h1>

    <div class="input-table">

        <section class="input-form">
            <form method="post">
                <h2>Consluta</h2>
                <div class="form-element">
                    <label for="date">Fecha:</label>
                    <input type="date" name="date" id="date" required>
                </div>
                <div class="form-element">
                    <label for="desc">Descripción</label>
                    <input type="text" id="desc" name="desc" placeholder="Ingresar la descripción." required>
                </div>
                <div class="form-element">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="name" placeholder="Ingrese el nombre." required>
                </div>
                <div class="form-element">
                    <label for="acciones">Acciones</label>
                    <input type="text" id="acciones" name="act"placeholder="Ingrese acciones." required>
                </div>
                <div class="form-element">
                    <label for="state">Estados</label>
                    <div class="estados-btn">
                        <input type="radio" id="abierto" name="state" value="abierto" checked required>
                        <label for="abierto">Abierto</label>

                        <input type="radio" id="cerrado" name="state" value="cerrado" required>
                        <label for="cerrado">Cerrado</label>
                    </div>

                </div>

                <button type="submit" name="submit">Enviar</button>
                <?php include "../CRUDAPP/Db/insert.php"; ?>
            </form>
        </section>

        <div class="input-section">
            <div class="filtrar">
                <h3>Filtrar: </h3>
                <div class="estados-fil-btn">
                    <input type="radio" id="todo" name="filter" value="todo" checked>
                    <label for="todofil">Todo</label>

                    <input type="radio" id="abiertofil" name="filter" value="abierto">
                    <label for="abiertofil">Abierto</label>

                    <input type="radio" id="cerradofil" name="filter" value="cerrado">
                    <label for="cerradofil">Cerrado</label>

                    <button type="submit" class="filtrar-btn" name = "filtrar-submit">Flitrar</button>
                </div>
            </div>

            <table>
                <tr class="top-columns">
                    <th>Fecha</th>
                    <th>Descripción</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                    <th>Estado</th>
                    <th>Modificaciones</th>
                </tr>
                <?php
                include "../CRUDAPP/Db/filter.php";

                while ($mostrar = mysqli_fetch_array($resultado_consulta)) {
                ?>
                    <tr class="table-row">
                        <td><?php echo $mostrar['fecha'] ?></td>
                        <td><?php echo $mostrar['descripcion'] ?></td>
                        <td><?php echo $mostrar['nombre'] ?></td>
                        <td><?php echo $mostrar['acciones'] ?></td>
                        <td><?php echo $mostrar['estado'] ?></td>
                        <td><?php echo $mostrar['modifica'] ?></td>
                        <td class="command">
                            <a href="../CRUDAPP/Db/modificar.php?id=<?php echo $mostrar['id']?>" id="btn-modificar">Modificar</a>
                            <a href="../CRUDAPP/Db/eliminar.php?id=<?php echo $mostrar['id']?>" id="btn-borrar">Borrar</a>
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