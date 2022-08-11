<?php 
	

 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>MAPA Back End 1</title>
	 <link rel="icon" type="imagem/png" href="images/logo.JPG" />
	<link rel="stylesheet" type="text/css" href="css/styles.css" media="screen" />
</head>
<body>
	<div id="header">
			<div id="logo">
				<a href="?pg=1" ><img src="images/donadirce.JPG"><br>
				</a>
			</div>
	
			<div id="menu">	
				<nav>
		         <ul>
		          <br><br><br>
		           <li><a href="index.php?pg=1">Home</a></li>           
		           <li><a href="index.php?pg=1">Blog</a></li>
		           <li><a href="index.php?pg=1">Conheça a Dona Rita</a></li>
		           <li><a href="index.php?pg=3">Contato</a></li>
		          </ul>
		        </nav>
			</div>
			<div id="logo2">
				<a href="?pg=1" ><img src="images/carne3.jpg"><br></a>
			</div>
				
	</div>

	<div id="main">
		<div class="article">
			<h1> 
				<?php
					include_once('function/controlar.php'); 
					@$valor = $_GET['pg'];
					controlarAcesso($valor);

				 ?>
				 
			</h1>
		</div>
		</div>
	<div id="sidebar">
		
	</div>
<br>
	<div id="footer">
		<div class="rodape_direito">
			<h1>Quer saber mais?</h1>
			<h3>Nossas Páginas</h3>
			<p><a href="index.php?pg=1">Home</a></p>
			<p><a href="index.php?pg=1">Blog</a>	</p>
			<p><a href="index.php?pg=1">Conheça a Dona Rita</a></p>
			<p><a href="index.php?pg=3">Contato</a>	</p>

		</div>
		<div class="rodape_meio">
			
			<h3>Links Úteis</h3>
			<p><a href="index.php?pg=1">Politica de Privacidade</a></p>
			<p><a href="index.php?pg=1">Aviso Legal</a>	</p>
			<p><a href="index.php?pg=1">Termos de Uso</a></p>
		</div>
		<div class="rodape_esquerdo">
			
			<h3>Sobre o Projeto</h3>
			<p>Projeto de Divulgação das marmitas da Dona Rita!	</p>

		</div>
			<br>
			<div class="assinatura">
				
				<p>
					Desenvolvido por hugo mendes santos
				</p>
			</div>
		
	</div>
			
	
</body>
</html>