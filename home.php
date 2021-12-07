<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>    
    <div class="contenedor">
        
        <div class="cabecera">
            <h2>Lista de Tareas</h2>
        </div>
        <form id="form-crear" class="formulario">
            <div class="form-control">
            <input type="text" id="crear" class="form-control" placeholder="Nombre de la Tarea">
            <button><i class="fas fa-plus"></i></button>
            
            
            </div>
        </form>
    </div>
    <section>
        
        <form action="">
            <input type="text" id="buscar" placeholder="Buscar...">
        </form>
        <ul id="lista-tareas" class="list-group">
                        
        </ul>
    </section>
<script src="app.js"></script>
<input type="button" value="Cancelar" onClick="history.go(-1);">

</body>
</html>