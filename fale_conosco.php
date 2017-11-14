<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/reset.css" rel="stylesheet" type="text/css" />
</head>

<body>


	<div class="topo_home">
    
    	<?php
      include("php\banner.php");
   		?>
    
	</div><!--fim topo home-->

	<div class="menu">
		<ul>
    	<li><A href="index.php">Home</A></li>
        <li><A href="sobre.php">Sobre</A></li>        
        <li><A href="fale_conosco.php" class="active">Fale Conosco</A></li>
    	</ul>
  </div><!--fim menu-->
   
<div id="fundo_fale_conosco">
  <div class="formulário">
    <p>Fale Conosco</p>
    <form id="form1" name="form1" method="post" action="mailto:">
      <table width="450" border="0" cellspacing="10" cellpadding="10">
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><label for="nome"></label>
          <input name="nome" type="text" id="nome" size="50" placeholder="Nome" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><label for="telefone"></label>
          <input name="telefone" type="text" id="telefone" size="50" placeholder="Telefone"/></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><label for="email"></label>
          <input name="email" type="text" id="email" size="50" placeholder="E-mail" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><p>
            <label for="mensagem"></label>
            <label for="msg"></label>
              <textarea name="msg" id="msg" cols="45" rows="5" placeholder="Mensagem"></textarea>
          </p></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
        <tr>
          <td><input type="submit" name="enviar" id="enviar" value="Enviar" />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" name="limpar" id="limpar" value="Limpar" /></td>
        </tr>
      </table>
    </form>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    
    
  </div>
       
  <div class="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7306.628077775915!2d-46.701612!3d-23.700477!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce4fc8d15f4763%3A0xa56579b6a03d20d7!2sPra%C3%A7a+Enzo+Ferrari%2C+104+-+Jardim+Santa+Helena%2C+S%C3%A3o+Paulo+-+SP%2C+04786-071!5e0!3m2!1spt-BR!2sbr!4v1510251675379" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div><!--fim mapa-->


</div><!--fundo fale conosco-->

<center>
  <p><Strong>Tel: </Strong>(11)99999-0000</p></div><br/>
  <p><strong>E-mail: </strong>atendimento@soupickles.com.br</p>
</center>

<div class="rodape"> 
  <p>&nbsp;</p>
  <p>© Copyright 2017 soupickles.com.br - All Rights Reserved - Desenvolvido por Sonic.Ltda</p>
</div>
<!--fim rodape-->

 
</body>
</html>