<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Fim</title>
</head>
<body>
    <?php
        include('conexao.php');
        $tipo = $_GET['tipo'];
        if($tipo == 'entrada') {
            $sql = "SELECT sum(valor) valor FROM fluxo_caixa where tipo = 'entrada'";
        } else if($tipo == 'saida'){
            $sql = "SELECT sum(valor) valor FROM fluxo_caixa where tipo = 'saida'";
        }else if($tipo == 'saldo') {
            $sql = "SELECT sum(case when tipo = 'entrada' then valor else 0 end) - 
                            sum(case when tipo = 'saida' then valor else 0 end) as valor
                            from fluxo_caixa";
        }
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
        echo $row[0];
    ?>
    <div>
        <button type="submit"><a href="Consulta_fluxo_caixa.html">Voltar</a></button>
    </div>
    <div>
        <button type="submit"><a href="index.php">Voltar Início</a></button>
    </div>
</body>
</html>