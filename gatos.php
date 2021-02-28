<!DOCTYPE html>
<html lang="pt-br">
   <head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">   
<title>:/ Planeta Pets</title>
<meta http-equiv="Content-Type" content="text/html" >
<LINK REL="stylesheet" HREF="/css/animal.css" TYPE="TEXT/CSS">
</head>

<META NAME="DESCRIPTION" CONTENT="Portal sobre animais de estimação">






</head>

<!--#include virtual="/include/conexao.asp" --><body background="/images/planetapets_01.jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="768" height="380" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>
    <td height="149"><table width="773" border="0" cellpadding="0" cellspacing="0" bgcolor="#F7FBF8">
        <tr>
          <td width="7"><img src="/images/spacer.gif" width="7" height="8" /></td>
          <td width="753"><table width="759" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><img src="/images/spacer.gif" width="7" height="8" />
                    <!--#include virtual="/include/body.asp" --></td>
              </tr>
              <tr>
                <td><table width="760" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="120" valign="top" bgcolor="#EAF6ED"><!--#include virtual="/include/vitrine2.asp" --></td>
                      <td colspan="2" valign="top"><table width="590" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="420" valign="top"><table style="padding-left: 5px" width="420" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td><p class="subtitulo">Gatos </p>
                                      <p class="texto">Temos <a href="/dicasveterinarias/dicasveterinarias.asp">artigos t&eacute;cnicos</a> escrito por veterin&aacute;rios e criadores <br>
                                          <br>
                                      Conhe&ccedil;a melhor as ra&ccedil;a de Gatos </p>
                                      <p class="texto">&nbsp;</p>
                                      <table cellpadding="0" cellspacing="0" border="0" width="325"  >
                                        <% 


conexao("Select * from gatos order by arquivo")
if not rs.eof then  

while not rs.eof 
%>
                                        <tr  >
                                          <td ><div class="texto" align="justify"><a href="/info/gatos/ver.asp?id=<%=rs("id")%>&nome=<%=rs("raca")%>"><%=rs("raca") %> </a></div>
                                              <br>
                                              <br></td>
                                          <%
rs.Movenext
wend
end if
%>
                                        </tr>
                                      </table>
                                      <p align="center" class="subtitulo">&nbsp;</p></td>
                                </tr>
                            </table></td>
                            <td width="170" valign="top"><!--#include virtual="/include/vitrine.asp" --></td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td height="8" colspan="3"><img src="/images/spacer.gif" width="7" height="8" /></td>
                    </tr>
                </table></td>
              </tr>
          </table></td>
          <td width="7"><img src="/images/spacer.gif" width="7" height="8" /></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td><img src="/images/spacer.gif" width="7" height="8" /></td>
  </tr>
  <tr>
    <td><table width="100" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td></td>
        </tr>
        <tr>
          <td><img src="/images/spacer.gif" width="7" height="8" /></td>
        </tr>
    </table></td>
  </tr>
</table>
<script src='http://ads25578.hotwords.com.br/show.jsp?id=25578&cor=FF0000'></script> </body>
</html>
