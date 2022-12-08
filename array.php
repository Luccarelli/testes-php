<?php


//Estudos sobre array

echo "<h1>Estudo sobre Arrays</h1>";

// array(0, 1, 2, 3, ....)
$frutas = array("maça", "banana", "mamão", "melão", "abacate", "laranja");

// $produtos[0] = array("nome" => "macarrão", "preço" => 3.99, "qtd" => 2);
// $produtos[1] = array("nome" => "macarrão", "preço" => 3.99, "qtd" => 2);




$produtos = array(
    array("nome" => "macarrão", "preco" => 3.99, "qtd" => 2),
    array("nome" => "banana prata", "preco" => 5.19, "qtd" => 5),
    array("nome" => "ouro branco", "preco" => 3.20, "qtd" => 2),
    array("nome" => "pera", "preco" => 3.20, "qtd" => 2),
);


echo "<table border=1>";
echo "<tr>";
echo "<td>Produto</td>";
echo "<td>Valor</td>";
echo "<td>Quantidade</td>";
echo "</tr>";

foreach ($produtos as $produto):

    echo "<tr>";
    echo "<td>";
    echo $produto["nome"];
    echo "</td>";

    echo "<td>";
    echo $produto["preco"];
    echo "</td>";

    echo "<td>";
    echo $produto["qtd"];
    echo "</td>";

    echo "</tr>";

endforeach;
echo "</table>";



array_push($frutas, "melancia");
array_push($frutas, "pera");
array_push($frutas, "uva");

echo '<pre>';

// print_r($produtos);
// echo "<br>";
// var_dump($produtos);

echo '</pre>';



// foreach ($frutas as $fruta) {
//     echo "<br>";
//     echo $fruta;
// }

/*
pode ser usado esse formato também 
foreach ($frutas as $fruta):
echo "<br>";
echo $fruta;
endforeach;
*/

echo "<hr>";

echo "<h2>Array associativo;</h2>";

$cliente = array('nome' => 'Leonardo', 'Fone' => '1699999999', 'email' => 'contato@Leonardoenrico');

print_r($cliente);

// echo $cliente['nome'];
// echo '<br>';
// echo $cliente['Fone'];