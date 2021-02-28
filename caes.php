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
        <title>Cães</title>
        <link href="/css/estilos.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="lado_direito">
            <a href="/"> Home Page </a>  &gt; 
            <a href="/racaseespecies/racaseespecies.asp">Ra&ccedil;as &amp; Esp&eacute;cies</a> &gt; <a href="./caes.php">C&atilde;es</a></p>

        <h1>C&atilde;es</h1>
        <p>Conhece melhor:.</p>
        <p>O cão (Canis lupus familiaris), no Brasil também chamado de cachorro, é um mamífero canídeo e talvez o mais antigo animal domesticado pelo ser humano.  Ao longo dos séculos, através da domesticação, o ser humano realizou uma seleção artificial dos cães por suas aptidões, características físicas ou tipos de comportamentos. O resultado foi uma grande diversidade de raças caninas, confira algumas na listagem abaixo.
        <p>Com expectativa de vida que varia entre dez e vinte anos, o cão é um animal social que, na maioria das vezes, aceita o seu dono como o "chefe da matilha" e possui várias características que o tornam de grande utilidade. Possui excelente olfato e audição, é bom caçador e corredor vigoroso, relativamente dócil e leal, inteligente e com boa capacidade de aprendizagem.
        <p>"O cão é o melhor amigo do homem", já que não há registro de amizade tão forte e duradoura entre espécies distintas quanto a de humano e cão. 
        <div align="center">
            <table>
                <?php
                $sql = "Select arquivo, raca from caes order by arquivo";
                $res = mysqli_query($conexao->conexao, $sql);
                $qtd = mysqli_num_rows($res);
                if ($qtd > 0) {
                    while ($animal = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                        ?>
                        <tr>
                            <td>
                                <a href="/racaseespecies/caes/ver.asp?arquivo=<?= $animal["arquivo"] ?>">
                                    <center> <img src="<?= $animal["arquivo"] ?>.jpg" alt="<?= $animal["arquivo"] ?>" width="150" height="150" /><br/><?= $animal["raca"] ?></center>
                                    <br/>
                                </a>
                                <br>
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </table>
        </div>
        <p>&nbsp;</p>
    </div>
</body>
</html>