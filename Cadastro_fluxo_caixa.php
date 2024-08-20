<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fim Cadastro</title>
</head>
<body>
    <?php
        include("conexao.php");

        $data = $_POST["data"];
        $tipo = $_POST["tipo"];
        $valor = $_POST["valor"];
        $historico = $_POST["hist"];
        $cheque = $_POST["cheque"];


        $sql = "INSERT INTO fluxo_caixa(data, tipo, valor, historico, cheque) VALUES ('$data', '$tipo', '$valor', '$historico', '$cheque')";

        echo $sql;

        $result = mysqli_query($con, $sql);

        if($result)
        {
            echo "<h2>Dados cadastrados com sucesso!</h2>";
        }
        else
        {
            echo "<h2>Erro ao cadastrar!</h2>";
            mysqli_error($con);
        }
    ?>
    <div>
        <button type="submit"><a href="Cadastro_fluxo_caixa.html">Voltar</a></button>
    </div>
    <div>
        <button type="submit"><a href="index.php">Voltar Início</a></button>
    </div>
</body>
</html>