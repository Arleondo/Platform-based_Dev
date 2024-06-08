<!DOCTYPE html>
<html lang="es">

<head>
    <title>To Do List</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

    <nav>
        <a class="heading" href="#">To Do List</a>
    </nav>

    <div class="container">
        <div class="input-area">
            <form method="POST" action="Add_Task.php">
                <input type="text" name="task"
                   placeholder="Escribir tus task aqui..." required />
                <button class="btn" name="add">
                    Agregar Task
                </button>
            </form>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Tasks</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php
            require 'conexion.php';
            $Task_Fetch =
                mysqli_query($CONN, "SELECT * FROM task ORDER BY task_id ASC") or die(mysqli_error($CONN));
            $count = 1;
            while ($fetch = $Task_Fetch->fetch_array()) {
            ?>
            <tr class="border-bottom">
                <td>
                    <?php echo $count++ ?>
                </td>
                <td>
                    <?php
                    if ($fetch['status'] == "Hecho"){
                        ?><del><?php echo $fetch['task']?></del>
                        <?php
                    }else {
                        echo $fetch['task'];
                    }
                    ?>
                </td>
                <td>
                    <?php echo $fetch['status'] ?>
                </td>
                <td colspan="2" class="action">
                    <?php
                    if ($fetch['status'] != "Hecho")
                    {
                        echo '<a href="Update_Task.php?task_id=' . $fetch['task_id'] . '"class="btn-completed">✅</a>';
                    }
                    ?>
                    <a href="Delete_Task.php?task_id=<?php echo $fetch['task_id'] ?>" class="btn-remove">❌</a>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>
</body>

</html>