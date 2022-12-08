<?php
require "listaProdutos.php";
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