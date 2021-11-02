<?php
/**
 * Script que muestra en una tabla los valores enviados por el usuario a través
 * del formulario utilizando el método POST
 */
// Alternativa para detectar el envío de un formulario: if($_SERVER['REQUEST_METHOD']=='POST')
// Se recomienda el control del botón cuando existan más de un formulario
if (isset($_POST["submit"]) && !empty($_POST["nif"]) && !empty($_POST["name"]) && !empty($_POST["surname"]) && !empty($_POST["email"]) && !empty($_POST["fecha"]) && !empty($_POST["password"]))
{
    if (!preg_match("/^[ABCDEFGHJNPQRSUVW]{1}/", $_POST["nif"]))
    {
        $nif = trim($_POST["nif"]);
        $nif = filter_var($nif, FILTER_SANITIZE_STRING);
        echo "NIF:" . $nif . "<br/>";
    }
    else
    {
        echo "El NIF no cumple con los parametros o esta vacio</br>";
    }
    if (!preg_match("/[0-9]/", $_POST["name"]) && (strlen($_POST["name"]) < 15))
    {
        $nombre = trim($_POST["name"]);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
        echo "Nombre:" . $nombre . "<br/>";
    }
    else
    {
        echo "El nombre no cumple con los parametros o esta vacio</br>";
    }

    if (!preg_match("/[0-9]/", $_POST["surname"]) && (strlen($_POST["surname"]) < 20))
    {
        $apellidos = trim($_POST["surname"]);
        $apellidos = filter_var($apellidos, FILTER_SANITIZE_STRING);
        echo "Apellidos:" . $apellidos . "<br/>";
    }
    else
    {
        echo "Los Apellidos no cumple con los parametros o esta vacio</br>";
    }

    if (!empty($_POST["email"]))
    {
        $correo = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        if (filter_var($correo, FILTER_VALIDATE_EMAIL))
        {
            echo "email:" . $correo . "<br/>";
        }
    }
    else
    {
        echo "El correo no cumple con los parametros o esta vacio</br>";
    }

    if (!empty($_POST['fecha']))
    {
        $fecha = ($_POST['fecha']);
        echo "Fecha:" . $fecha . "<br/>";
    }
    else
    {
        echo "La fecha no cumple con los parametros o esta vacia</br>";
    }

    if (!empty($_POST["password"]) && (strlen($_POST["password"]) > 6) && (strlen($_POST["password"]) < 10))
    {
        echo "Contraseña:" . sha1($_POST["password"]) . "<br/>";
    }
    else
    {
        echo "la contraseña no cumple con los parametros o esta vacia</br>";
    }

}
else
{
    echo "Hay campos vacios";
}
echo "<p><a href='index.php'>Haz clic aquí para volver al formulario</a></p>";
?>