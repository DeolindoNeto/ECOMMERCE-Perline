
<!DOCTYPE html>
<link rel="stylesheet" href="../css/menuLateral.css">
<?php
    session_start();
    $id_user = $_SESSION['usuariologado']['id_user'];
    include "confirma_compra_back.php";
?>

<div class="cada_prodindexfinal">

        <div class='table'>
            <h2>Informações do pedido</h2><br>
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
                    $id_produto = $linha['id_produto'];
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
            <br><br>

        <?php 
            }
            echo "<h3>Total: R$ ".number_format($total, 2, ',', '.');".</h3>";
        ?>
            </div>
    <br><br>
    <hr>
    <br>
    <h3>Deseja confirmar?</h3>
    <br>
    <div class="botoesconfirma">
	<a class="botaocon" href="finaliza_compra_front.php">Finalizar</a>
    <a class="botaocon2" href="./selecao_produto_front.php">Cancelar</a>&nbsp;&nbsp;
    </div>
    
