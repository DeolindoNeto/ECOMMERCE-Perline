
<!DOCTYPE html>
<link rel="stylesheet" href="../css/menuLateral.css">
<?php
    session_start();
    $id_user = $_SESSION['usuariologado']['id_user'];
    include "confirma_compra_back.php";
?>

<div class="mae">

        <input type="checkbox" id="check" checked>
        <header>

            <div class="carrinhohome">
                <label for="check">
                    <abbr title="Carrinho"><img  id="btnSidebar" src="../img/icon_menu_sacola.png"></abbr>
                </label>
            </div>
            
            <abbr class="logo_perline" title="Perline"><img src="../img/PERLINE.png" width="70%"></abbr>
            
            <div class="header-btn">
                <abbr title="Home"><a href="./index.php"><img class="header-btn-home" src="../img/icon_menu_home.png"></a></abbr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>  
        </header>

        <div class="tpfix2">
                
            <div class="tpfix2-btn">
                <center>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="prod" id="prod-sublinhado" id="home-btn" title="Home" href="../usuario/index.php">Home</a> 
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="prod" title="Produtos" href="../usuario/selecao_produto_front.php">Produtos</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="prod" title="Quem Somos" href="http://ftp.projetoscti.com.br/projetoscti21/entregadesen/usuario/desen.html">Quem Somos</a>
                </center>
            </div>
        </div>

    <div class="cada_prodindexfinal">

            <div class='pedido-finalizacao'>
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

                <?php 
                    }
                    echo "<h3>Total: R$ ".number_format($total, 2, ',', '.');".</h3>";
                ?>
            </div>
        <br>
        <hr>
        <h3>Deseja confirmar?</h3>
        <div class="botoesconfirma">
            <a class="botaocon" href="finaliza_front.php">Finalizar</a>
            <a class="botaocon2" href="./selecao_produto_front.php">Cancelar</a>&nbsp;&nbsp;
        </div>
    </div>

</div>