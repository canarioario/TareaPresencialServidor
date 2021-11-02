<?php /*
● Ejercicio 1.1. Se desea implementar una página que nos permita calcular la
raíz cuadrada de un polinomio de segundo grado. Para ello, implemente una
página que contenga un formulario con tres cajas de texto , donde se
introducirán los valores de los coeficientes, un párrafo cuyo contenido inicial
será:
' Introduzca los coeficientes del polinomio de segundo grado ' y un botón
' Calcular '.
Al pulsar el botón, se realizarán los cálculos correspondiente y se mostrará en el
párrafo, en una cadena, los valores de las soluciones obtenidas para la ecuación. 
x1 y x2,
Notas:
● Utilizar Bootstrap como hoja de estilos para nuestra página.
● El envío de los datos del formulario se realizará mediante el método POST
● Deberá verificar la correcta recepción de los distintos parámetros POST
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

