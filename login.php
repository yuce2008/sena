<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Aquí deberías guardar el nuevo usuario en la base de datos
    // Simulación de base de datos
    // ... código para guardar en la base de datos

    // Redirigir a la página de login
    header("Location: index.php");
    exit();
}

session_start();

// Simulación de base de datos (esto debería ser reemplazado por una base de datos real)
$users = [
    ['email' => 'test@example.com', 'password' => '123456']
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Verificación de credenciales
    foreach ($users as $user) {
        if ($user['email'] === $email && $user['password'] === $password) {
            $_SESSION['user'] = $user;
            header("Location: dashboard.php");
            exit();
        }
    }
    echo "Credenciales inválidas.";
}
?>