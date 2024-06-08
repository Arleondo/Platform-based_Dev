<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar a la base de datos

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "online_food";

    $conn = new mysqli($server, $user, $pass, $db);
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Escapar los datos para evitar inyección SQL
    $ID = $conn->real_escape_string($_POST["nombre"]);
    $Birth_date = $conn->real_escape_string($_POST["Birth_date"]);
    $ocupacion = $conn->real_escape_string($_POST["ocupacion"]);
    $contacto = $conn->real_escape_string($_POST["contacto"]);
    $nacionalidad = $conn->real_escape_string($_POST["nacionalidad"]);
    $nivel_ingles = $conn->real_escape_string($_POST["English_level"]);
    $lenguajes_programacion = implode(", ", $_POST["lenguajes_programacion"]);
    $aptitudes = $conn->real_escape_string($_POST["aptitudes"]);
    $habilidades = implode(", ", $_POST["habilidades"]);
    $perfil = $conn->real_escape_string($_POST["perfil"]);
    $experiencia_laboral = $conn->real_escape_string($_POST["experiencia_laboral"]);
    $formacion = $conn->real_escape_string($_POST["formacion"]);

    // Preparar la consulta SQL para insertar los datos en la tabla 'curriculum'
    $sql = "INSERT INTO formulario_1 (ID, fecha_nacimiento, ocupacion, contacto, nacionalidad, nivel_ingles, lenguajes_programacion, aptitudes, habilidades, perfil, experiencia_laboral, formacion)
            VALUES ('$ID', '$Birth_date', '$ocupacion', '$contacto', '$nacionalidad', '$nivel_ingles', '$lenguajes_programacion', '$aptitudes', '$habilidades', '$perfil', '$experiencia_laboral', '$formacion')";

    if ($conn->query($sql) === TRUE) {

        // Guardar los datos en sesión

        $_SESSION['nombre_apellidos'] = $ID;
        $_SESSION['telefono'] = $_POST['telefono'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['linkedin'] = $_POST['linkedin'];
        $_SESSION['direccion'] = $_POST['direccion'];
        $_SESSION['nivel_ingles'] = $nivel_ingles;
        $_SESSION['aptitudes'] = $aptitudes;
        $_SESSION['habilidades'] = $habilidades;
        $_SESSION['perfil'] = $perfil;
        $_SESSION['experiencia_laboral'] = $experiencia_laboral;
        $_SESSION['formacion_ed'] = "Basic skibidi sigma ohio rizzer"; // Reemplaza skididop dop yes yes
        $_SESSION['formacion_insana'] = "Professional Rizzer"; // Reemplaza sigma ohio rizzer


        $conn->close();

        // Redireccionar al usuario a la página de curriculum generado

        header("Location: Token.php");

        exit();

    } else {
        echo "Error al insertar datos: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Error: El formulario no fue enviado correctamente";
}
