<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Editando anfibios</title>
    </head>
    <body>
        <?php
        if (!isset($raca) || !isset($animal)) {
            echo "<script>alert('Por favor define raça e nome do animal !'); window.close();</script>";
        }

        $animal = str_replace(chr(10) . chr(13), "<br>", $animal);
        $animal = str_replace("<br><br><br><br>", "<br><br>", $animal);

//Faço a conexão com o bd
        include "Conexao.php";
        $conexao = new Conexao();

        $sqlString = "update anfibios set raca = '$raca', arquivo = '$arquivo', animal = '$animal' where id = " . $_POST["id"];
        $resSave = mysqli_query($conexao->conexao, $sqlString);
        ?>
        <script>location.href = "./admin.php";</script>
        <!--#include virtual="/include/bottom.asp" -->
        <script src='http://ads25578.hotwords.com.br/show.jsp?id=25578&cor=FF0000'></script> </body>
</HTML>