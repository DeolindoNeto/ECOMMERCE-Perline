<body>bgcolor = "#1ABC9C"</body>
<?php
    //session_start();
    $id_user = 1; // Depois precisamos alterar para pegar da $_SESSION
    include "confirma_compra_back.php";
?>

<hr>
<h2>Seu carrinho</h2>
<hr>

<div class='table'>
	<div class='row'>
		<div class='cell cellDescricao cellHeader'>
			Descrição
		</div>
		<div class='cell cellPreco cellHeader'>
			Preço
		</div>
		<div class='cell cellPreco cellHeader'>
			Qtde.
		</div>
		<div class='cell cellPreco cellHeader'>
			Subtotal
		</div>
	</div>

	<?php
		$total = 0.0;

		// Criar linhas com os dados dos produtos
        foreach ($resultado_lista as $linha)
        { 
			$id_produto = $linha['id_produto'];
			$total += floatval($linha['subtotal']);
	?>
            <div class='row'>
				<div class='cell cellDescricao'>
					<?php echo $linha['descricao']; ?>
				</div>
				<div class='cell cellPreco'>
					<?php echo $linha['preco']; ?>
				</div>
				<div class='cell cellPreco'>
					<?php echo $linha['qtde']; ?>
				</div>
				<div class='cell cellPreco'>
					<?php echo $linha['subtotal']; ?>
				</div>
            </div>
	<?php 
		}  
		echo "<h3>Total: R$ ".number_format($total, 2, ',', '.');".</h3>";
	?>

    <br><br>
    <hr>

    <h3>Deseja confirmar?</h3>
	<a href="finaliza_compra_front.php">Finalizar</a>
    <a href="carrinho_front.php">Cancelar</a>&nbsp;&nbsp;
</div>