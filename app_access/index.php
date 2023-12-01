<?php
session_start();
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Página de Inicio</h1>

    <?php
    if (isset($user)) {
        echo "<h3>Usuario registrado: $user</h3>";
        echo "<p><a href='logout.php'>Logout</a></p>";
    } else {
        echo "<a href='login.php'>Login</a>";
    }
    ?>

    <h2>Menú de usuario</h2>
    <ul>
        <li><a href="page1.php">Página uno</a></li>
        <li><a href="page2.php">Página dos</a></li>
    </ul>
    <h2>Menú de administrador</h2>
    <ul>
        <li><a href="admin1.php">Página uno</a></li>
    </ul>
</body>

</html>