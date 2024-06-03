<?php
require_once 'conexion.php';

if ($_GET['task_id'] != "") {
    $task_id = $_GET['task_id'];

    $Task_update = mysqli_query($CONN,"UPDATE task SET status = 'Hecho' WHERE task_id = $task_id");

    header('Location:index.php');
    exit();
}
?>
