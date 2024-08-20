<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
</head>
<body>
    <?php
        include("conexao.php");

        $sql = "SELECT * FROM fluxo_caixa";
        $result = mysqli_query($con, $sql);
    ?>
    <h1>Listagem do Fluxo de Caixa</h1>
    <table align="center" border="1" width="500">
        <tr>
            <th>Código</th>
            <th>Data</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Historico</th>
            <th>Cheque</th>
            <th>Alterar</th>
            <th>Excluir</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result))
            {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['data']."</td>";
                echo "<td>".$row['tipo']."</td>";
                echo "<td>".$row['valor']."</td>";
                echo "<td>".$row['historico']."</td>";
                echo "<td>".$row['cheque']."</td>";
                echo "<td><a href='Altera_fluxo_caixa.php?id=".$row['id']."'>Alterar</a></td>";
                echo "<td><a href='Excluir_fluxo_caixa.php?id=".$row['id']."'>Excluir</a></td>";
                echo "</tr>";
            }
        ?>
        <tr>
            <th><a href="index.php">Voltar</a></t>
        </tr>
    </table>
</body>
</html>