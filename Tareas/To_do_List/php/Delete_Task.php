<?php

require_once 'conexion.php';

if ($_GET['task_id']) {
    $task_id = $_GET['task_id'];

    $Delete_Task = mysqli_query($CONN,"DELETE FROM task WHERE task_id = $task_id");

    header("Location:index.php");
    exit();
}
?>
