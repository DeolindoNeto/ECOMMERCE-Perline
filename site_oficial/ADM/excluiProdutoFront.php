<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Perline</title>
        <link rel="stylesheet" type="text/css" href="../css/menuLateral.css">
    </head>
    <body>
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
                <abbr title="Local"><a href="../usuario/local.php"><img class="header-btn-local" src="../img/icon_menu_mapa.png"></a></abbr>
                <abbr title="Login"><a href="../usuario/login.html"><img class="header-btn-login" src="../img/icon_menu_login.png"></a></abbr>&nbsp;&nbsp;&nbsp;&nbsp;
            </div>  
        </header>

        <div class="tpfix2">
                
            <div class="tpfix2-btn">
                <center>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="prod" id="home-btn" title="Home" href="../usuario/index.php">Home</a> 
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="prod" title="Produtos" href="../usuario/selecao_produto_front.php">Produtos</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="prod" title="Quem Somos" href="desen.html">Quem Somos</a>
                </center>
            </div>
        </div>
        
        <a name="topo"></a>
        <br><br><br><br><br>
        
        <!-- Início da página -->
            <?php
            $id_produto = $_GET["id_produto"];
            include "./get_InfoProduto.php";
            ?>

            <!-- Formulário (após as informações serem carregadas) -->
            <div class="content">
                <form class="altprod" action="./excluiProdutoBack.php" method="post">
                    
                    <div class="card-header_alteraprod">
                        <center>
                            <h2>Exclusão de Produto</h2>
                        </center>
                    </div>

                    <div class="form1">

                        <label class="labels">ID do produto:</label><br>
                        <input type='number' size='26' value="<?php echo "".$linha['id_produto'].""; ?>" readonly>

                        <br><br>

                        <label class="labels">Nome do produto:</label><br>
                        <input type='text' name='PRODUCTNAME' maxlength='70' size='26' value="<?php echo "".$linha['nome'].""; ?>" readonly>

                        <br><br>

                        <label class="labels">Preço:</label><br>
                        <input type='number' name='PRODUCTPRICE' placeholder='Ex. 9.99' value="<?php echo "".$linha['preco'].""; ?>" readonly>

                        <br><br>

                        <label class="labels">Código visual:</label><br>
                        <input type='text' name='PRODUCTCODE' maxlength='50' size='26' value="<?php echo "".$linha['codigo_visual'].""; ?>" readonly>
                        <br><br>

                        <label class="labels">Custo:</label><br>
                        <input type='number' name='PRODUCTCOST' placeholder='Ex. 9.99' value="<?php echo "".$linha['custo'].""; ?>" readonly>
                            
                        <br><br>

                    </div>
                
                    <div class="form2">
                    
                        <label class="labels">Preço de Venda:</label><br>
                        <input type='number' name='PRODUCTSELLPRICE' placeholder='Ex. 9.99' value="<?php echo "".$linha['preco_venda'].""; ?>" readonly>
                        
                        <br><br>

                        <label class="labels">Margem de lucro (%):</label><br>
                        <input type='number' name='PRODUCTMARGIN' placeholder='Ex. 33.33' value="<?php echo "".$linha['margem_lucro'].""; ?>" readonly>

                        <br><br>

                        <label class="labels">ICMS (%):</label><br>
                        <input type='number' name='PRODUCTICMS' placeholder='Ex. 33.33' value="<?php echo "".$linha['icms'].""; ?>" readonly>
                        <br><br>
                            
                        <label class="labels">Imagem:</label><br>
                        <input type='text' name='PRODUCTIMAG' maxlength='200' size='26' value="<?php echo "".$linha['campo_imagem'].""; ?>" readonly>

                        <br><br>

                        <label class="labels">Manufaturado?</label><br>
                        <input type="radio" name="PRODUCTMANFACTURED" value="Sim" checked required> <label>SIM</label>
                        <input type="radio" name="PRODUCTMANFACTURED" value="Não" required> <label>NÃO</label>

                        <br><br>
                    </div>  

                        <input type="submit" value="Confirma exclusão">
                        <input type="button" value="Editar" onclick="location.href='alteraProdutosFront.php?id_produto=<?php echo $id_produto ?>';">
                        <input type="button" value="Voltar" onclick="location.href='tabelaprodutos.php';">
                </form>
            </div> 
        <footer>
            <a> </a>
        </footer>
    </body>
</html>