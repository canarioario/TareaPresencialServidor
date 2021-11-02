<?php
if (isset($_POST["submit"]) && is_numeric($_POST["num1"]) && is_numeric($_POST["num2"]) && is_numeric($_POST["num3"]))
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    $neg = - 1;
    $menosb = $num2 * $neg;
    $oper1 = pow($num2, 2);
    $oper2 = 4 * $num1 * $num3;
    $resta = $oper1 - $oper2;
    $raiz = pow($resta, (1 / 2));
    $dosa = 2 * $num1;
    $result1 = ($menosb + $raiz) / $dosa;
    $result2 = ($menosb - $raiz) / $dosa;
    echo "Las soluciones de la ecuación son:</br>";
    echo "X<sub>1</sub> = $result1</br>";
    echo "X<sub>2</sub> = $result2";
}
?>
