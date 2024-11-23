<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "files";
    $dataport = "3307";


    $conn = mysqli_connect($host, $user, $password, $database, $dataport);
    if ($conn->connect_error) {
        die ("conexion fallida". $conn->connect_error);

    }

    $query = "SELECT * FROM adminp WHERE CORREO='$username' AND PASS='$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        header("Location: index.html");
        exit();

    } else {
        header("Location: index.html");
        exit();
    }
}


?>