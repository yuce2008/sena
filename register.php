<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Crear Cuenta</h1>
        <form action="register.php" method="post">
            <label for="fullname">Nombre Completo:</label>
            <input type="text" id="fullname" name="fullname" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Crear Cuenta</button>
        </form>
        <p>¿Ya tienes cuenta? <a href="index.php">Inicia sesión aquí</a></p>
    </div>
</body>
</html>


