<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        .error { color: red; }
    </style>
</head>
<body>
    <h1>Form Login</h1>
    <form method="POST" action="proses_login.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>
        
        <input type="submit" value="Login">
    </form>

    <?php
    if (isset($_GET['error']) && $_GET['error'] == '1') {
        echo "<p class='error'>Login salah. Silakan coba lagi.</p>";
    }
    ?>
</body>
</html>
