<?php

//estudo de variáveis em php
echo "<h1>Estudo de Variáveis em php</h1>";

//string
$nome = "Leonardo Luccarelli";
echo $nome;
echo "<br>";


//diferença entre strings em "aspas" e 'apóstrofos' 

$nomeaspas = "Nome: $nome";
$nomeapostrofo = 'Nome: $nome';

echo $nomeaspas;
echo "<br>";
echo $nomeapostrofo;
//aspas consideram variáveis e apostrofos não


//usando quebra modelo html dentro do php
echo "<br>";

//numérica
$numerica = 50;
echo $numerica;

//usando quebra modelo html dentro do php
echo "<br>";

//float
$float = 50.99;
echo $float;

//usando quebra modelo html dentro do php
echo "<br>";

//boolean
$boolean = true;
echo $boolean;

//usando quebra modelo html dentro do php
echo "<br>";

//tipo null
$null = null;
echo $null;

//concatenador php é o ponto . 
$exemploconcatenar = $nome . $float;
echo $exemploconcatenar;