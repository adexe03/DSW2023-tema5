<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Se ha cerrado sesión correctamente</h1>
  <p>
    <a href="login.php">Volver a entrar</a>
  </p>
</body>

</html>