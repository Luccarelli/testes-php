<?php
$produtos = array(
    array("nome" => "macarrão", "preco" => 3.99, "qtd" => 2),
    array("nome" => "banana prata", "preco" => 5.19, "qtd" => 5),
    array("nome" => "ouro branco", "preco" => 3.20, "qtd" => 2),
    array("nome" => "pera", "preco" => 3.20, "qtd" => 2),
);
?>


<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Documento</title>
</head>

<body>

    <h2>Listagem de Produtos</h2>
    <hr>

    <table border="1">
        <tr>
            <td>Produtos </td>
            <td> Valor </td>
            <td> Qtd</td>

        </tr>

        <?php foreach ($produtos as $produto): ?>
        <tr>
            <td>
                <?php echo $produto['nome'] ?>
            </td>
            <td>
                <?php echo $produto['preco'] ?>
            </td>
            <td>
                <?php echo $produto['qtd'] ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>


</body>

</html>