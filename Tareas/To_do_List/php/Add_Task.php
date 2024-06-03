<?php
require_once 'conexion.php';
if (isset($_POST['add'])) {
    if ($_POST['task'] != "") {

        $task = $_POST['task'];

        $Add_Task = mysqli_query($CONN,"INSERT INTO task VALUES('', '$task', 'Pendiente')");

        header('Location:index.php');
        exit();
    }
}
?>
