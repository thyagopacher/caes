<% On Error Resume Next  
Function UPPER2(texto)
Dim strPrimeiro, str, i, cont, termo
texto = LCase(texto)
quebra = Replace(texto, ".", "")
str = Split(quebra, " ")

For i = LBound(str) To UBound(str)

cont = Len(str(i))

strPrimeiro = Mid(str(i), 1, 1)

If (i = 0) Then

If (IsNumeric(strPrimeiro) = False) Then

strPrimeiro = UCase(strPrimeiro)

End If

End If

termo = termo + strPrimeiro + Mid(str(i), 2) + " "

Next

UPPER2 = Trim(termo)

End Function 

raca = (Request("raca"))

arquivo = (Request("arquivo"))

animal = (Request("animal"))

animal = replace(animal, Chr(10)&Chr(13), "<br>")

animal = replace(animal, "'", " ")

animal = replace(animal, "A+", " ")

animal = replace(animal, "A-", " ")

animal = replace(animal, "Tamanho do texto?", " ")

animal = replace(animal, "A A A A", " ")

animal = replace(animal, "Indique para um Amigo", " ")

animal = replace(animal, "Imprimir", " ")

animal = replace(animal, "", " ")

animal = replace(animal, Chr(34), " ")

animal = replace(animal, Chr(39), " ")

animal = replace(animal, Chr(147), " ")

raca = replace(raca, "'", " ")

raca = replace(raca, Chr(34), " ")

raca = replace(raca, Chr(39), " ")

raca = replace(raca, Chr(147), " ")

raca = replace(raca, "&", " e ")

raca = UPPER2(raca)



%>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">   

        <title>Adicionar noticia</title>

        <link href="/css/estilos.css" rel="stylesheet" type="text/css" />

        <style type="text/css">

            .style1 {

                text-align: center;

            }

        </style>

    </head>

    <body>

        <div id="geral"><div id="regiao_1"><ul><li id="link_mail"><a href="http://www.conteudoanimal.com.br/faleconosco/inclusao.asp">Fale Conosco</a></li><li id="link_faq"><a href="http://www.conteudoanimal.com.br/faq.asp">FAQ </a></li><li id="link_indique"><a href="http://www.conteudoanimal.com.br/anuncios.asp">Hospede seu site</a></li><li id="link_sitemap"><a href="http://www.conteudoanimal.com.br/mapadosite.asp">Mapa</a></li></ul>	</div>

            <div id="regiao_2"><div id="menu_principal"><ul><li id="top"><a href="http://www.conteudoanimal.com.br/default.asp" title="P&aacute;gina Inicial">CONTE&Uacute;DO ANIMAL</a></li><li id="link_racas"><a href="http://www.conteudoanimal.com.br/racaseespecies/info.asp" title="Ra&ccedil;as &amp; Esp&eacute;cies">RA&Ccedil;AS &amp; ESP&Eacute;CIES</a></li><li id="link_shopping"><a href="http://www.conteudoanimal.com.br/anuncios.asp" title="An�ncios" target="new" rel="nofollow">An�ncios</a></li><li id="link_colunas"><a href="http://www.conteudoanimal.com.br/dicasveterinarias/dicasveterinarias.asp" title="Ver Colunas"> COLUNAS</a></li><li id="link_esportes"><a href="http://www.conteudoanimal.com.br/racaseespecies/esportes.asp" title="Esportes">ESPORTES</a></li><li id="link_animals"><a href="http://www.conteudoanimal.com.br/racaseespecies/caes/todas.asp" title="Not&iacute;cias">NOT&Iacute;CIAS</a></li><li id="bottom"></li></ul></div>

                <div id="box_banner_topo">

                </div><!-- Fim c�digo do banner topo --><div id="box_pesquisa">

                    <!-- SiteSearch Google -->

                    <p>Digite aqui a palavra-chave.</p><form action=" http://www.conteudoanimal.com.br/busca.asp" id="Form1"><input type="hidden" name="domains" value="www.conteudoanimal.com.br"><input type="text" name="q" size="20" maxlength="255" id="campo_pesquisa" value=""><br/><input name="sitesearch" type="radio" class="radio" value="" />Web<input name="sitesearch" type="radio" class="radio" value="www.conteudoanimal.com.br" checked="checked">Conte&uacute;do Animal<input class="bt_pesquisa" type="submit" name="sa" value="Pesquisar">

                        <!-- Campos hidden --><input type="hidden" name="cx" value="partner-pub-7589629526688718:vocfdf-73ai" /><input type="hidden" name="forid" value="1" /><input type="hidden" name="ie" value="ISO-8859-1" /><input type="hidden" name="oe" value="ISO-8859-1" /><input type="hidden" name="cof" value="FORID:11" /><input type="hidden" name="hl" value="pt" /></form>

                    <script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=cse-search-box&lang=pt"></script>

                    <!-- SiteSearch Google --></div></div><div id="regiao_7">	

                <!-- Banner do rodap� - 728x15 -->

            </div>

            <!--#include virtual="/include/lateral.asp" --> 

            <div id="lado_direito" class="style1">	  <a href="http://www.conteudoanimal.com.br/"> Home Page </a>  &gt; <a href="http://www.conteudoanimal.com.br/racaseespecies/caes/caes.asp"> C�es </a> &gt; <a href="#">Agradecemos por nos enviar animal</a></p>

                <!--  �rea para os textos -  -->	

                <h1>&nbsp;</h1>

                <h1>Inclus&atilde;o de caes</h1>

                <!-- Use sempre H5 para o t�tulo dos textos -->	

                <br/>

                <p align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">ra�a adicionada com sucesso.</font></p>

                <?php
                $sql = "INSERT INTO caes (raca, arquivo, animal) VALUES ( '$raca', '$arquivo', '$animal')";
                mysqli_query($conexao->conexao, $sql);
                ?>

                <p align="center">Agradecemos se puder contribuir com o portal </p>

                <div class="style1">

                    Ou na Conta do Banco Itau - Ag 1565 , C/C 13075-2

                </div>

                <br/><p align="center"><a href="assessoria.asp"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Clique 

                        aqui para adicionar outra letra</font></a></p>

                <p align="center">&nbsp;</p>
                <!-- FIM da �rea para os textos -->  
            </div>		
        </div>
        <!--#include virtual="/include/bottom.asp" -->
    </div>
</body>
</html>