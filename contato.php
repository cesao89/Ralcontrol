<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="César Oliveira Domingos">
<meta name="description" content="Brastion Systems">
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<title>.: Bastion System ____________________________________________________</title>
</head>

<body>
<center>
<br /><br />
<table id="corpo" width="90%" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr align="center">
		<td id="menu">
			<table width="980" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td align="center">
						<a href="index.html" target="_self"><img src="images/logo.png" width="293" height="71" alt="Brastion Systems" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</td>
					<td width="106">
						<a href="index.html" target="_self"><img id="home" src="images/bot_home_inat.png" width="106" height="81" alt="Home" /></a>
					</td>
					<td width="106">
						<a href="servicos.php" target="_self"><img id="serv" src="images/bot_serv_inat.png" width="106" height="81" alt="Serviços" /></a>
					</td>
					<td width="106">
						<a href="produtos.php" target="_self"><img id="prod" src="images/bot_prod_inat.png" width="106" height="81" alt="Produtos" /></a>
					</td>
					<td width="106">
						<a href="parceiros.html" target="_self"><img id="parc" src="images/bot_parc_inat.png" width="106" height="81" alt="Parceiros" /></a>
					</td>
					<td width="106">
						<a href="contato.php" target="_self"><img id="cont" src="images/bot_cont_ativ.png" width="106" height="81" alt="Contato" /></a>
					</td>
            </tr>
			</table>
		</td>
	</tr>
	<tr>
		<td id="submenu">
			>> Contato
		</td>
	</tr>
	<tr>
		<td height="500" align="center">
			<table width="980" height="100%" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td width="200" valign="top">
						<div id="titulo">&nbsp;&nbsp;&nbsp;&nbsp;Contato</div>
						<div id="titulo">_______________</div>
					</td>
					<td style="width:6px;background:url(images/corrente_vert.jpg) repeat-y;"></td>
					<td align="center">
						<form action="contato.php" target="_self" name="form" method="post">
							<table border="0" align="center" cellpadding="0" cellspacing="0">
								<tr>
									<td width="90" valign="top">
										Nome:
									</td>
									<td>
										<input name="nome" type="text" id="nome" size="80" maxlength="60" />
									</td>
								</tr>
								<tr>
									<td width="90" valign="top">
										E-mail:
									</td>
									<td>
										<input name="email" type="text" id="mail" size="80" maxlength="60" />
									</td>
								</tr>
								<tr>
									<td width="90" valign="top">
										Telefone:
									</td>
									<td>
										<input name="telefone" id="telefone" type="text" size="80" maxlength="12" />
									</td>
								</tr>
								<tr>
									<td width="90" valign="top">
										Mensagem:
									</td>
									<td>
										<textarea name="mensagem" id="mensagem" rows="15" cols="80"></textarea>
									</td>
								</tr>
								<tr>
									<td>
										<input type="submit" name="ok" value=" Enviar " />
										
									</td>
								</tr>
							</table>
						</form>
						<?php
							if(isset($_POST) && !empty($_POST)){
								$nome			= strip_tags(utf8_decode(@$_POST['nome']));
								$email		= strip_tags(utf8_decode(@$_POST['email']));
								$telefone	= strip_tags(utf8_decode(@$_POST['telefone']));
								$msg			= strip_tags(utf8_decode(@$_POST['mensagem']));
								
								$data		= date("d/m/Y");                     //função para pegar a data de envio do e-mail
								$hora		= date("H:i");                       //para pegar a hora com a função date
								
								if($telefone != ''){
									$tel = "\n Telefone: $telefone";
								} else {
									$tel = "\n";
								}
								
								//aqui envia o e-mail para você
								mail ("cesar_web@live.com",
								  "Web Bastion - $nome",
								  "$nome - [ $data - $hora ]
								  \n
								  \n Nome: $nome
								  \n E-mail: strip_tags($email
								  $tel
								  \n
								  \n Mensagem__________________________________
								  \n $msg
								  \n
								  \n __________________________________________
								  \n Adicionais________________________________
								  \n Data: $data - Hora: $hora",
								  "From: webcontato@bastion.com.br"
								);
								echo "<p align='right'>$nome, sua mensagem foi enviada com sucesso!</p>";
							} else {
								echo "<p align='right'>É necessario preencher todos os campos!</p>";
							}
						?>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td align="center" id="rodape"><img src="images/rodape.jpg" width="980" height="126" border="0" usemap="#Map" /></td>
	</tr>
	<tr>
		<td align="center" id="copy">
			Copyright &copy; 2010-2011 Bastion Systems. Todos os direitos reservados.
		</td>
	</tr>
</table>
</center>
<br /><br />

<map name="Map" id="Map">
			<area shape="rect" coords="660,3,787,122" href="bastion.crt" target="_new" alt="Certificado Bastion System CA Certificate 2010 - 2012" />
</map>
</body>
</html>