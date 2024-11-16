<?php

include "koneksi.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = password_hash($_POST["password"], PASSWORD_BCRYPT); 

        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        $mysqli->query($sql);

header("Location: login.php");
}
?>