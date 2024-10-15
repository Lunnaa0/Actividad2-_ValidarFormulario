<?php
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: index.php");
    exit();
}

$errors = [];
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
if (empty($name) || strlen($name) < 3 || strlen($name) > 25 || !preg_match("/^[a-zA-Z\s]+$/", $name)) {
    $errors['name'] = "El nombre debe tener entre 3 y 25 caracteres y solo contener letras y espacios.";
}

$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
if (empty($password) || strlen($password) < 6 || strlen($password) > 8 || !preg_match("/^[a-zA-Z0-9]+$/", $password)) {
    $errors['password'] = "La contraseña debe tener entre 6 y 8 caracteres y solo contener caracteres alfanuméricos.";
}

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
if (empty($email)) {
    $errors['email'] = "Debe ingresar un correo electrónico válido.";
}

$dateofbirth = filter_input(INPUT_POST, 'dateofbirth', FILTER_SANITIZE_STRING);
if (empty($dateofbirth)) {
    $errors['dateofbirth'] = "Debe ingresar una fecha de nacimiento.";
}

$telephone = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_STRING);
if (empty($telephone)) {
    $errors['telephone'] = "Debe ingresar un número de teléfono.";
}

$shop = filter_input(INPUT_POST, 'shop', FILTER_SANITIZE_STRING);
if (empty($shop)) {
    $errors['shop'] = "Debe seleccionar una tienda.";
}

$age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_STRING);
if (empty($age)) {
    $errors['age'] = "Debe seleccionar una opción de edad.";
}

if (!empty($errors)) {
    include 'index.php';
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Datos Registrados</title>
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <div class="formu">
            <h1>Datos del cliente</h1>
            <p>
                <?php
                echo "Nombre: " . htmlspecialchars($_POST["name"]) . "<br>";
                echo "Contraseña: " . htmlspecialchars($_POST["password"]) . "<br>";
                echo "Email: " . htmlspecialchars($_POST["email"]) . "<br>";
                echo "Fecha de nacimiento: " . htmlspecialchars($_POST["dateofbirth"]) . "<br>";
                echo "Teléfono: " . htmlspecialchars($_POST["tel"]) . "<br>";
                echo "Tienda: " . htmlspecialchars($_POST["shop"]) . "<br>";
                echo "Edad: " . htmlspecialchars($_POST["age"]) . "<br>";
                echo "Suscripción: " . (isset($_POST["subscription"]) ? "Sí" : "No") . "<br>";
                ?>  
            </p>
        </div>
    </body>
</html>





