<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de tareas</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;400;900&display=swap" rel="stylesheet">
    <script src="script.js" type="text/javascript" defer></script>
</head>
<body>
    <div class="list roundBorder">
        <div class="date">
            <div class="dateRight">
                <div id="dateNumber"></div>
                <div>
                    <div id="dateMonth"></div>
                    <div id="dateYear"></div>
                </div>
            </div>
            <div id="dateText"></div>
        </div>
        <form onsubmit="addNewTask(event)" >
            <input type="text" name="taskText" autocomplete="off" placeholder="Nueva tarea" class="roundBorder">
            <button type="submit" class="addTaskButton">+</button>
            <button type="button" class="orderButton roundBorder" onclick="renderOrderedTasks()">Ordenar</button>
        </form>
        <div id="tasksContainer"></div>
    </div>
</body>
</html>