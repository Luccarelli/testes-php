<?php





$link = new PDO("mysql:host=localhost;dbname=BANCO", "USER", "SENHA");
$link->exec("set names utf8");

$query = $link->prepare("select * from PRODUTOS");

$query->execute();

$res = $query->fetchAll(PDO::FETCH_ASSOC);


foreach($res as $lista)
{
    echo "<br>";
    echo $lista['pro_valor'] . " - " . $lista['pro_nome'];
}