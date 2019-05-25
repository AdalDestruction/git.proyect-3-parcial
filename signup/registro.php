<?php
  require '../database.php';
  $message = '';
  if (!empty($_POST['nombre']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (nombre, contrasena) VALUES (:nombre, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Usuario creado con exito';
      header('Location: ../index/index.php');
    } else {
      $message = 'Hubo algun herror creando su cuenta.';
    }
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrate en | AWP COMICS</title>
    <link rel="stylesheet" href="../assets/css/registro.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
</head>
<header>

</header>
<body>
<form action="registro.php" method="POST">
    <p id="register">Registrate</p>
    <br>
    <br>
    <label>Nombre</label><br><br>
        <input name="nombre" type="text" placeholder="Escribe tu nombre"><br><br><br>
        <label>Contraseña</label><br><br>
        <input name="password" type="password" placeholder="Escribe tu contraseña"><br><br><br>
        <label>Confirma tu contraseña</label><br><br>
        <input name="confirm_password" type="password" placeholder="Confirma tu contraseña"><br><br><br>
        <input type="submit" value="Registrarse">
  </form>

  <div class="containerimg2">
    <a href="../index/index.php">
        <img src="../assets/src/previous.png">
    </a>
</div>

</body>
</html>