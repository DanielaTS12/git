<?php
// Verifica si el formulario de inicio de sesión fue enviadoooo
//Modificacion para comprobar que este funcionando git
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén los datos del formulario
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
    
    // Aquí debes realizar la validación de usuario y contraseña
    // Puedes verificarlos en una base de datos o en un archivo de almacenamiento, por ejemplo

    // Ejemplo de validación básica
    if ($usuario == "usuario" && $contrasena == "contrasena") {
        // Inicio de sesión exitoso
        session_start();
        $_SESSION["usuario"] = $usuario;
        header("Location: dashboard.php");
        exit();
    } else {
        // Credenciales inválidas
        $error = "El usuario o contraseña esta incorrecto";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>LOGUEO </title>
</head>
<body>
    <p>Daniela Torres  </p>
    <h2>Iniciar sesion </h2>
    <?php if(isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="usuario">Nombre del usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>
        <label for="contrasena"> Esciba su contraseñaaa:</label>
        <input type="password" id="contrasena" name="contrasena" required><br><br>
        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>
