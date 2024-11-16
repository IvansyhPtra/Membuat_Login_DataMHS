<?php
include "koneksi.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"]; 

    $sql = "SELECT password FROM users WHERE username = '$username'";
    $result = $mysqli->query($sql);

    if ($result && $result->num_rows > 0) {
        $hashed_password_from_database = $result->fetch_assoc()["password"];

        if (password_verify($password, $hashed_password_from_database)) {
            $_SESSION["username"] = $username;
            header("Location: dashboard.php");
            exit();
        }
    }

    // Jika login gagal, kembali ke laman login dengan parameter error
    header("Location: login.php?error=1");
    exit();
}
?>
