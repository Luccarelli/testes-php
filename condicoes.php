<?php
echo "Estudo de operadores de comparação e condicional <hr>";

$a = "20";
$b = 20;
$c = 30;


echo "Operador de igualdade ==  com IF <br>";
if ($a == $b) {
    echo "A ($a) é igual a B ($b)";
} else {
    echo "A ($a) não é igual a B ($b)";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "Operador se é idêntico === com IF <br>";
if ($a === $b) {
    echo "A ($a) é igual a B ($b)";
} else {
    echo "A ($a) não é igual a B ($b)";
}


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "Operador de diferente != com IF <br>";
if ($a != $b) {
    echo "A ($a) é diferente de B ($b)";
} else {
    echo "A ($a) não é diferente de B ($b)";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "Operador se é maior que > com IF <br>";
if ($c > $b) {
    echo "C ($c) é maior que ($b)";
} else {
    echo "C ($a) não é maior que B ($b)";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "Operador se é menor que < com IF <br>";
if ($b > $c) {
    echo "B ($b) é menor que ($c)";
} else {
    echo "B ($b) não é maior que B ($c)";
}