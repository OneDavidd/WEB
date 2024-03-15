<?php
echo "<h1>1ª Atividade</h1>";

$a = 2;
$b = 4;
$c = 6;
$m = (($c + $b) / 2) ** (--$c);
$t = --$c ** ($b + $a);
$x = --$c + $b;
$y = $b++ + $a;
$z = $a - $b--;

echo ("a = " . $a . "<br>");
echo ("b = " . $b . "<br>");
echo ("c = " . $c . "<br>");
echo ("m = " . $m . "<br>");
echo ("t = " . $t . "<br>");
echo ("x = " . $x . "<br>");
echo ("y = " . $y . "<br>");
echo ("z = " . $z . "<br>");

$a2 = doubleval($a);
$b2 = doubleval($b);
$c2 = strval($c);

echo ("<br>");

echo ("A: " . $a2 . "<br>");
echo ("B: " . $b2 . "<br>");
echo ("C: " . $c2);
?>

<?php
echo "<h1>2ª Atividade</h1>";

$raio = 5;
$pi = 3.14;
$perimetro = $pi * $raio;
$area = $pi * ($raio * $raio);

echo ("Raio do Circulo: " . $raio . "cm<br> <br>");
echo ("Perímetro do Circulo: π($pi) * Raio($raio) -> $perimetro" . "cm <br> <br>");
echo ("Área do Circulo: π($pi) * Raio²(25) -> $area" . "cm")
?>

<?php
echo "<h1>3ª Atividade</h1>";

$x = 6;
$y = 3;

echo ("x = $x / ");
echo ("y = $y <br> <br>");

echo ("x + y = " . $x + $y . "<br>");
echo ("x - y = " . $x - $y . "<br>");
echo ("x * y = " . $x * $y . "<br>");
echo ("x / y = " . $x / $y . "<br>");
echo ("Resto da Divisão = " . $x % $y . "<br>");
echo ("x ^ y = " . pow($x, $y) . "<br>");
echo ("Média = " . ($x + $y) / 2 . "<br>");
echo ("Raiz Quadrada = " . sqrt($x + $y));
?>

<?php
echo "<h1>4ª Atividade</h1>";
$X = 3;

$z = ((2 * pow($X, 2) - 3 * pow($X, $X + 1)) / (2 * $X) + sqrt($X + 1) / 4) / sqrt(4 * $X + pow(2, $X));

echo "O Resultado da Equação para X = $X é: $z";
?>

<?php
echo "<h1>5ª Atividade</h1>";

$a = 10;
$b = 2;
$c = 32;

$r = pow($a + $b, 2);
$s = pow($b + $c, 2);
$d = ($r + $s) / 2;

echo "O Valor de D é Igual a: $d"
?>