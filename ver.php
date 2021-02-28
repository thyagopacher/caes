<?php
//Faço a conexão com o bd
include "Conexao.php";
$conexao = new Conexao();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Visualização de foto</title>
		<link href="/css/estilos.css" rel="stylesheet" type="text/css">
	</head>
<body>
<!--#include virtual="/include/top.asp" -->
<!--#include virtual="/include/lateral.asp" -->
<div id="lado_direito">	 <br/>
<?php

$sql = "select * from caes where 1 = 1";
if (isset($_GET["id"])) {
    $sql .= " and id = " . $_GET["id"];
}
if (isset($_GET["arquivo"])) {
    $sql .= " and arquivo = '" . $_GET["arquivo"] . "'";
}

$res = mysqli_query($this->conexao, $sql);
$rs = mysqli_fetch_array($res, MYSQLI_ASSOC);

if (!isset($_GET["arquivo"]) || !isset($_GET["id"])) {
    echo "<script>alert('Página não pode ser acessada sem parametros de GET!'); window.close();</script>";
}

?>
 <a href="/"> Home Page </a>  &gt;
 <a href="./racaseespecies.asp">Ra&ccedil;as &amp; Esp&eacute;cies </a> &gt;
 <a href="./caes.asp">C&atilde;es</a> &gt;
 <a href="ver.asp?arquivo=<?=strtolower($rs["arquivo"])?>.jpg"><?=$rs["raca"]?> </a></p>
<!--#include virtual="/include/navega.asp" -->
<!--  INICIO --->
<h1><?=$rs["raca"]?></h1><!-- Use sempre H5 para o título dos textos -->
<center>
	<img src="/racaseespecies/caes/<?=strtolower($rs["arquivo"])?>.jpg" width="200" height="200" border="0">
</center>
<?php
	echo $rs["animal"];
?>
</div>
</div>
</div>
 </body>
</html>
