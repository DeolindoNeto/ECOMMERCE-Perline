<!DOCTYPE html>
<link rel="stylesheet" href="../css/menuLateral.css">
<?php
    //session_start();
    $id_user = 1; // Depois precisamos alterar para pegar da $_SESSION
    include "confirma_compra_back.php";
?>
<hr>
<br>
<h2 id="seucart">Seu carrinho</h2>
<br>
<hr>
<br>

<div class='table'>
	<div class='row'>
		<div class='cell cellNome cellHeader'>
			Produto
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
			$idprod = $linha['id_produto'];
			$total += floatval($linha['subtotal']);
	?>
            <div class='row'>
				<div class='cell cellNome'>
				<?php echo $linha['nome']; ?>
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
    <a href="./selecao_produto_front.php">Cancelar</a>&nbsp;&nbsp;
</div>