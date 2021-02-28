<?php
//Faço a conexão com o bd
include "Conexao.php";
$conexao = new Conexao();
$sql = "select * from animal where id=" . $_GET["id"];
$res = mysqli_query($conexao->conexao, $sql);
?>
<html lang="pt-br">
    <head><!--#include virtual="/include/meta.asp" -->

        <title>Editar animal</title>
        <link href="/css/animal.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div align="center">
            <p>
                <font face="Verdana, Arial, Helvetica, sans-serif"><i><b><font size="2">Editar Animal </font></b></i></font></p>
            <p>&nbsp;</p>
        </div>
        <form action="../Copy%20of%20anfibios/editando.asp" method="post">

            <table cellpadding="0" cellspacing="0" border="0" width="521"    bgcolor="#BEBEBE">
                <tr  bgcolor="#DEDEDE"> 
                    <td   
                        align="right" width="171" bgcolor="#DEDEDE"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="1">Raca:</font></b></td>
                    <td   
                        align="center" width="347"> 
                        <input type="text" name="raca" size="40" style="font-family: Verdana; font-size: 8 pt; border-style: solid; border-width: 1" value="<?= $rs["raca"] ?>">
                    </td>
                </tr>
                <tr  bgcolor="#DEDEDE"> 
                    <td   
                        align="right" width="171" bgcolor="#DEDEDE"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="1">Arquivo:</font></b></td>
                    <td   
                        align="center" width="347"> 
                        <input type="text" name="arquivo" size="40" style="font-family: Verdana; font-size: 8 pt; border-style: solid; border-width: 1" value="<?= $rs["arquivo"] ?>">
                    </td>
                </tr>
                <tr  bgcolor="#DEDEDE"> 
                    <td   
                        align="right" width="171" bgcolor="#DEDEDE"  valign="top"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="1">Observação:</font></b></td>
                    <td   
                        align="center" width="347"> 
                        <textarea name="animal" cols="40" spellcheck="true" style="font-family: Verdana; font-size: 8 pt; border-style: solid; border-width: 1" rows="5"><?= $rs["animal"] ?></textarea>
                    </td>
                </tr>
                <tr  bgcolor="#DEDEDE"> 
                    <td   
                        align="center" bgcolor="#DEDEDE" colspan="2"> 
                        <input type="hidden" name="id" value="<?= $rs["id"] ?>">
                        <input type="submit" value="Enviar" name="B1" style="font-family: Verdana; font-size: 8 pt; font-weight: bold; background-color: #FFCC00; border-style: solid; border-width: 1">
                    </td>
                </tr>
            </table>
        </form>
        <!--#include virtual="/include/bottom.asp" -->
        <script src='http://ads25578.hotwords.com.br/show.jsp?id=25578&cor=FF0000'></script> </body>
</html>