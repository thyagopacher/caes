<?php
include "Conexao.php";
$conexao = new Conexao();
$sql = "select * from caes order by id desc";
$res = mysqli_query($conexao->conexao, $sql);
$qtd = mysqli_num_rows($res);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Administração de noticias</title>
        <meta http-equiv="Content-Type" content="text/html">
        <link href="/css/animal.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <font face=verdana>
        <p>&nbsp;</p>
        </font>

        <p align="center">&nbsp;</p>
        <?php if ($qtd > 0) { ?>
            <table cellpadding="0" cellspacing="0" border="0" width="53%"   align="center">
                <?php while ($animal = mysqli_fetch_array($res)) { ?>
                    <tr>
                        <td width="69%">
                            <div align="left"><?= $animal["raca"] ?></div>
                        </td>
                        <td width="31%">
                            <font size="2"> [<a href="./editaranimal.php?id=<?=$animal["id"]?>">Editar</a>]</font>
                        </td>
                    <br>
                    <td  width="31%">
                        <font size="2">[<a href="apagarnoticia.asp?id=<?=$animal["id"]?>">Apagar</a>] </font>
                    </td>
                </tr>
            <?php } ?>
        </table>
    <?php } ?>
    <p align="center">&nbsp;</p>

    <!--#include virtual="/include/bottom.asp" -->
    <script src='http://ads25578.hotwords.com.br/show.jsp?id=25578&cor=FF0000'></script> 
</body>
</html>