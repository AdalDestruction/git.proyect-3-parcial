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
      $message = 'Successfully created new user';
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/sign up.css">
  </head>
  <body>
    <div class="containerimg">
      <a href="../inicio/inicio.html">
        <img src="../assets/src/previous.png">
      </a>
    </div>

    <div class="containerimg2">
      <a href="../index/index.php">
        <img src="../assets/src/previous.png">
      </a>
    </div>


<div class="container">
    <form action="signup.php" method="POST">
      <p id="register">Registrate</p>

      <label>Nombre</label>
      <br>
      <br>
      <input name="nombre" type="text" placeholder="Escribe tu nombre">
      <br>
      <br>
      <br>
      <br>
      <label>Contraseña</label>
      <br>
      <br>

      <input name="password" type="password" placeholder="Escribe tu contraseña">
      <br>
      <br>
      <br>
      <br>
      <label>Confirma tu contraseña</label>
      <br>
      <br>
      <input name="confirm_password" type="password" placeholder="Confirma tu contraseña">
      <br>
      <br>
      <br>

          <?php if(!empty($message)): ?>
          <p id="message"> <?= $message ?></p>
        <?php endif; ?>


      <input type="submit" value="Registrarse">
      <br>
      <br>
    </form>
</div>
  </body>
</html>
