<?php
session_start();
 
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
    exit;
} else {
    $usuario_logeado = $_SESSION['user_id'];
    echo '<p class="success">Congratulations, you are logged in!</p> <hr>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>welcome user : <?php echo $usuario_logeado  ?> </h1>

<br><br>
    <a  href="cerrar.php">Cerrar Sesión</a>
</body>
</html>