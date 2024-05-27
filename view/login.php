<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Login</h1>
   <p><?php echo isset($message) ? $message : '' ?></p>

  <form action="?url=login" method="POST">
     <input type="email" value="franklin@gmail.com" placeholder="Correo" name="correo">
     <input type="password" placeholder="Contraseña" name="pass">
     <input type="submit" value="Login">
  </form>

</body>
</html>