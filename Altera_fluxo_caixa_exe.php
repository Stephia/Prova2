<?php
    include('conexao.php');
    $id = $_POST['id'];
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['hist'];
    $cheque = $_POST['cheque'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fim Altera</title>
</head>
<body>
    <?php
        $sql = "UPDATE fluxo_caixa SET data = '$data', tipo = '$tipo', valor = '$valor', historico = '$historico', cheque = '$cheque' WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if ($result)
            echo "Dados Atualizados";
        else
            echo "Erro ao atualizar dados!\n".mysqli_error($con);
    ?>
    <div>
        <button type="submit"><a href="Listar_fluxo_caixa.php">Voltar</a></button>
    </div>
</body>
</html>