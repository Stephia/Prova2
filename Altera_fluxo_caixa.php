<?php
    include('conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM fluxo_caixa WHERE id = $id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Cadastro</title>
</head>
<body>
    <form action="Altera_fluxo_caixa_exe.php" method="post">
        <fieldset>
            <legend>Alterar </legend>
            <div>
                <label for="data">Data: </label>
                <input type="date" name="data" id="data" value="
                    <?php echo $row['data']?>"><br>
            </div>
            <div>
                <label for="tipo">Tipo: </label>
                <input type="radio" name="tipo" id="tipo" value="entrada"
                    <?php echo $row['tipo'] == "entrada"? "selected" : ""?>>Entrada
                <input type="radio" name="tipo" id="tipo" value="saida"
                    <?php echo $row['tipo'] == "saida"? "selected" : ""?>>Saída<br>
            </div>
            <div>
                <label for="valor">Valor: </label>
                <input type="number" name="valor" id="valor" value="
                    <?php echo $row['valor']?>"><br>
            </div>
            <div>
                <label for="hist">Historico: </label>
                <input type="text" name="hist" id="hist" value="
                    <?php echo $row['historico']?>"><br>
            </div>
            <div>
                <label for="cheque">Cheque: </label>
                <select name="cheque" id="cheque">
                    <option value="sim" 
                        <?php echo $row['cheque'] == "sim"? "selected" : ""?>>Sim
                    </option>
                    <option value="nao"
                        <?php echo $row['cheque'] == "nao"? "selected" : ""?>>Não
                    </option><br>
                </select>
            </div>
        </fieldset>
            <div>
                <button type="submit">Enviar</button> 
            </div>
            <div>
                <input type="hidden" name="id" value="<?php echo $row['id']?>">
            </div>
        </fieldset>
        <div>
            <a href="index.php">Voltar ao inicio</a>
        </div>
        <div>
            <a href="Listar_fluxo_caixa.php">Voltar</a>
        </div>
    </form>
</body>
</html>