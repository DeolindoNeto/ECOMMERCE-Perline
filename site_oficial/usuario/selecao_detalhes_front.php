<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>P R O D U T O S</title>
    <link rel="stylesheet" href="../css/menuLateral.css">
    <link rel="shortcut icon" href="unesp.ico" type="image/x-icon">
	<link rel="icon" href="../img/faviconprod.png"> <!--icone na guia-->
</head>

    <?php
        $acao = $_GET['acao'] ?? '';
        $id_produto = $_GET['id_produto'] ?? 0;
        $id_user = 1; // Depois precisamos alterar para pegar da $_SESSION
    
        if ($acao=='up') {
            if (is_array($_POST['prod']))
                $prods = $_POST['prod'];
            else
                $prods = array();
        }
    
        include "carrinho_back.php";
    ?>

<body>
    <div class="mae">

        <input type="checkbox" id="check">
        <header>

            <div class="carrinhohome">
                <label for="check">
                    <abbr title="Carrinho"><img  id="btnSidebar" src="../img/icon_menu_sacola.png"></abbr>
                </label>
            </div>
            
            <abbr class="logo_perline" title="Perline"><img src="../img/PERLINE.png" width="70%"></abbr>
            
            <div class="header-btn">
                <abbr title="Home"><a href="./index.html"><img class="header-btn-home" src="../img/icon_menu_home.png"></a></abbr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <abbr title="Local"><a href="../usuario/local.html"><img class="header-btn-local" src="../img/icon_menu_mapa.png"></a></abbr>
                <abbr title="Login"><a href="../usuario/login.html"><img class="header-btn-login" src="../img/icon_menu_login.png"></a></abbr>&nbsp;&nbsp;&nbsp;&nbsp;
            </div>  
        </header>

        <div class="tpfix2">
                
            <div class="tpfix2-btn">
                <center>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="prod" title="Home" href="../usuario/index.html">Home</a> 
                    &nbsp;&nbsp;&nbsp;&nbsp;
                            
                    <a class="prod" id="prod-sublinhado" title="Produtos" href="../usuario/selecao_produto_front.php">Produtos</a>
                
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="prod" title="Quem Somos" href="quemsomos.html">Quem Somos</a>
                </center>
            </div>
        </div>
        
        <div class="sidebar">
    
            <h4 class="title-carrinho">C A R R I N H O</h4>
            <form action="?acao=up" method="post">
                <center>
                    <?php
                        $total = 0.0;
                
                        // Criar linhas com os dados dos produtos
                        foreach ($resultado_lista as $linha)
                        { 
                            $id_produto = $linha['id_produto'];
                            $total += floatval($linha['subtotal']);
                            if($id_produto == 0)
                            {
                                echo"Nenhum produto adicionado";
                            }
                    ?>        
                    
                            <div class='row'>
                                <div class='cell cellNome'>
                                    <?php echo $linha['nome']; ?>
                                
                                    <?php echo $linha['preco']; ?>
                                
                                    <input type="text" size="3" name="prod[<?php echo $id_produto; ?>]"
                                        value="<?php echo $linha['qtde']; ?>" />
                                
                                    <?php echo $linha['subtotal']; ?>
                        
                                    <a href='carrinho_back.php?acao=del&id_produto=<?php echo $id_produto; ?>'>Excluir</a>
                                </div>
                                <br>
                            </div>
                    <?php 
                        }  
                    echo "<h5>Subtotal: R$ ".number_format($total, 2, ',', '.');".</h5>";
                    ?>
                </center>
            
                <input type="submit" id="btn-atualizar" value="Atualizar"/>
                <br><br>
                <a class="btn-finalizar" href="./confirma_compra_front.php" target="_blank">Finalizar</a>
            </form>
        </div> 

    <?php $imagemproduto = $linha['campo_imagem']; ?>

    <div class="content-detalhes">
        <div class="detalhe_produto_foto">
    <?php echo "<img src='../img/$imagemproduto'>"; ?>
        </div>
            
    
        <div class="detalhes_produtos">
            <!-- Recuperando as informações do produto -->
            <?php
                $id_produto = $_GET["id_produto"];
                include "../utils/info_produto_back.php"; 
            ?>

            <div>
                <h1>
                <?php echo $linha['nome'];?>
                </h1>
                <br>
                <p>A pulseira praia conta com nossas lindas miçangas de conchinhas e estrelas. Esta peça é uma das mais vendidas da nossa loja, garanta já a sua!</p>
                <!-- <?php echo $linha['descricao']; ?> -->
                <br>
                <?php echo "<div class='preco-detalhes'>R$" .$linha['preco'];"</div>" ?>
                <br><br><br>
                <h6>Estoque:<?php echo $linha['quantidade']; ?></h6>
                <br><br><br>
                <a class="detalhes-btn-comprar" href='carrinho_front.php?acao=add&id_produto=<?php echo $id_produto; ?>'>Comprar</a>
                <br>
            </div>
    </div>
        </div><!--fim da div mae-->
        <footer>
            <a> </a>
        </footer>
    </div>
</body>
</html>