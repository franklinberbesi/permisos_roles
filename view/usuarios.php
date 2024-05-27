<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  if($_SESSION['login']){
    ?>
    <a href="?url=salir">Salir</a>
    <?php
  }
?>

<nav>
    <ul>
        <li>
            <a href="?url=usuarios">Usuarios</a>
        </li>
        <li>
            <a href="?url=planes">Planes</a>
        </li>
        <li>
            <a href="?url=factura">Factura</a>
        </li>
    </ul>
</nav>

<?php
 echo $acciones;
?>

<h1>Usuarios</h1>
<p><?php echo '¡Bienvenido'.isset($_SESSION['usuario']) ? $_SESSION['usuario'].'!' : '' ?></p>
<table>
    <thead>
        <th>Nombre</th>
        <th>Apellido</th>
    </thead>

    <tbody>
        <tr>
            <td>
                Franklin
            </td>
            <td>
                Berbesí
            </td>
        </tr>
    </tbody>
</table>
    
</body>
</html>