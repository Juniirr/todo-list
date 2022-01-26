<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <linkn rel="stylesheet" href="style1.css">
    <script>"https://code.jquery.com/jquery-3.3.1.slim.min.js"</script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></script>
</head>
<body background="fonfo.jpg">    
    
    <?php require_once 'process.php'; ?>

    <?php

    if (isset($_SESSION['message'])): ?>

    <div class="alert alert-<?=$_SESSION['msg_type']?>">

        <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        ?>
    </div>
    <?php endif ?>
    <div class="container">
    <?php
        $mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
        //pre_r($result);
        ?>
        <div class="row justify-content-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Tarea</th>
                        <th>Año</th>
                        <th colspan="2">Acciones</th>
                    </tr>
                </thead>
        <?php
            while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['location']; ?></td>
                    <td><?php echo $row['anio']; ?></td>
                    <td>
                        <a href="indexT.php?edit=<?php echo $row['id']; ?>"
                            class="btn btn-info">Editar</a>
                        <a href="process.php?delete=<?php echo $row['id']; ?>"
                            class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            <?php endwhile; ?>   
            </table>
        </div>
        <?php

        function pre_r( $array ) {
            echo '<pre>';
            print_r($array);
            echo '</pre';
        }
        ?>
        <div class="row justify-content-center">
        <form action="process.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" placeholder="Ingresa tu nombre" required>
            </div>
            <div class="form-group">
            <label>Tarea</label>
            <input type="text" name="location" class="form-control" value="<?php echo $location; ?>" placeholder="Ingrese su tarea" required>
            </div>
            <div class="form-group">
            <label>Año</label>
            <input type="text" name="anio" class="form-control" value="<?php echo $anio; ?>" placeholder="Ingresa el año" required>
            </div>
            <div class="form-group">
            <?php
            if ($update == true):
            ?>
            <button type="submit" class="btn btn-info" name="update">Actualizar</button>
            <?php else: ?>   
            <button type="submit" class="btn btn-primary" name="save">Crear</button>
            <?php endif; ?>
            </div>
      
        


</body>
</html>