<?php /*
● Ejercicio 1.2.3. Valide el formulario anterior considerando las siguientes
reglas:
○ NIF: Está formado por ocho dígitos y una letra. No puede estar vacío.
○ Nombre : Solo puede estar formado por letras y tener una longitud
máxima de 15 caracteres. No puede estar vacío.
○ Apellidos : Solo puede estar formado por letras y tener una longitud
máxima de 20 caracteres. No puede estar vacío.
○ Fecha Nacimiento : No puede estar vacío.
○ Email : tiene que ser un email válido. No puede estar vacío.
○ Contraseña : Debe tener una longitud mayor que 6 caracteres. No
puede estar vacío.
*/ ?>
<?php require_once 'includes/header.php'; ?>
<html>
  <head lang="es">
    <?php require 'includes/header.php'; ?>
  </head>
  <body>
    <?php require 'includes/body.php'; ?>
    <?php require 'includes/footer.php'; ?>
  </body>
</html>

