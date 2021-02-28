<?php
//Recupero os dados
$variables = (strtoupper($_SERVER['REQUEST_METHOD']) == 'GET') ? $_GET : $_POST;
foreach ($variables as $key => $value) {
    $$key = $value;
}

if (!isset($raca) || !isset($animal)) {
    echo "<script>alert('Por favor define raça e nome do animal !'); window.close();</script>";
}

$animal = str_replace(chr(10) . chr(13), "<br>", $animal);
$animal = str_replace("<br><br><br><br>", "<br><br>", $animal);

//Faço a conexão com o bd
include "Conexao.php";
$conexao = new Conexao();

//Adiciono no bd
$sqlString = "INSERT into anfibios (raca, arquivo, animal) VALUES ('$raca', '$arquivo', '$animal')";
$resSave = mysqli_query($conexao->conexao, $sqlString);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Animal adicionado com sucesso.</title>
        <link href="/css/animal.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <p>&nbsp;</p>
        <p align="center">
            <font face="Verdana, Arial, Helvetica, sans-serif" size="2">
            <?php
            if ($resSave != FALSE) {
                echo "Cadastro adicionado com sucesso!";
            } else {
                echo "Erro ao adicionar, causado por: " . mysqli_error($conexao->conexao);
            }
            ?>
            </font>
        </p>
        <p align="center"><a href="./admin.php"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Clique 
                aqui para volta &agrave; administra&ccedil;&atilde;o.</font></a></p>
        <div align="center"></div>
    </body>
</html>
