<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
include "Conexao.php";
$conexao = new Conexao();
$sql = "delete from caes where id = " . $_GET["id"];
$res = mysqli_query($conexao->conexao, $sql);

echo "<script>location.href='./admin.php';</script>";
?>
<!--#include virtual="/include/bottom.asp" -->
<script src='http://ads25578.hotwords.com.br/show.jsp?id=25578&cor=FF0000'></script>

</body>
</HTML>