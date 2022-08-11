<?php 
	include_once("dados/inforProdutos.php");
	$cod = $_GET['cod'];
	
 ?>

<div id="imagemPaginaPrincipal">

	<div class="imgDestaqueInformacaoProduto">

		<img src=" <?php echo $produtos[$cod]['img']?>">
		
	</div>
	<div class="destaque">
		<h1><?php echo $produtos[$cod]['titulo']  ?></h1>
		<p>
			<?php echo $produtos[$cod]['nome']  ?>
		</p>
		<h2>R$: <?php echo $produtos[$cod]['valor']  ?></h2>
		<p>Ingredientes
			<?php echo $produtos[$cod]['ingredientes']  ?>
		</p>
		
		<a href="index.php?pg=5&cod=<?php echo$cod ?>"> <p class="comprar"> COMPRAR</p></a>
		
	</div>
</div>
