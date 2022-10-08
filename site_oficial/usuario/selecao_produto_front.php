<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>P R O D U T O S</title>
    <link rel="stylesheet" href="../css/menuLateral.css">
    <link rel="shortcut icon" href="unesp.ico" type="image/x-icon">
	<link rel="icon" href="../img/faviconprod.png"> <!--icone na guia-->
</head>

<body>
    <div class="mae">
    <input type="checkbox" id="check">
    <header>
        <div class="carrinhohome">
        <label for="check">
            <abbr title="Carrinho"><img  id="btnSidebar" src="../img/icon_menu_sacola.png"></abbr>
        </label>
        </div>
        
        <div class="logo">
            <img class="icon_menu_local" src="../imagens/perlineLogo_reverso.svg" width="100%" >
        </div>
           
           <div id="icons_home">
            <abbr title="Home"><a href="./index.html"><img class="icon_menu_local" src="../img/icon_menu_home.png"></a></abbr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <abbr title="Local"><a href="../usuario/local.html"><img class="icon_menu_local" src="../img/icon_menu_mapa.png"></a></abbr>
           <abbr title="Login"><a href="../usuario/login.html"><img class="icon_menu_login" src="../img/icon_menu_login.png"></a></abbr>&nbsp;&nbsp;&nbsp;&nbsp;
           </div>  
    </header>
    
    <div class="sidebar">
        <center>
            <!--<div class="logo_no_carrinho">
                <h3><span>P E R L I N E</span>&nbsp;<abbr title="Perline"></abbr></h3>
            </div>-->
        </center>
    </div>
    
    <div class="tpfix2">
               
               <div class="botoes">
               <center>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <a class="prod" title="Home" href="../usuario/index.html">Home</a> 
               &nbsp;&nbsp;&nbsp;&nbsp;
                
               <a class="prod" title="Produtos" href="../usuario/selecao_produto_front.php">Produtos</a>
      
               &nbsp;&nbsp;&nbsp;&nbsp;
               <a class="prod" title="Quem Somos" href="quemsomos.html">Quem Somos</a>
               </center>
               </div>
               
    </div> 
    </div>
    <?php
        echo "<div class ='sidebar'>";
        $acao = $_GET['acao'] ?? '';
        $codproduto = $_GET['codproduto'] ?? 0;
        $codusuario = 1; // Depois precisamos alterar para pegar da $_SESSION
    
        if ($acao=='up') {
            if (is_array($_POST['prod']))
                $prods = $_POST['prod'];
            else
                $prods = array();
        }
    
        include "carrinho_back.php";
    ?>
    
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
            <div class='cell cellAcoes'>
                &nbsp;
            </div>
        </div>
    
        <form action="?acao=up" method="post">
        
        <?php
            $total = 0.0;
    
            // Criar linhas com os dados dos produtos
            foreach ($resultado_lista as $linha)
            { 
                $idprod = $linha['cod_produto'];
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
                        <input type="text" size="3" name="prod[<?php echo $idprod; ?>]"
                            value="<?php echo $linha['qtde']; ?>" />
                    </div>
                    <div class='cell cellPreco'>
                        <?php echo $linha['subtotal']; ?>
                    </div>
                    <div class='cell cellAcoes'>
                        <a href='?acao=del&codproduto=<?php echo $idprod; ?>'>Excluir</a>
                    </div>
                </div>
            }  
            <?php
            echo "<h3>Total da compra: R$ ".number_format($total, 2, ',', '.');".</h3>";
            ?>
        <br><br>
        <input type="submit" value="Atualizar Carrinho" />&nbsp;&nbsp;
        <a href="selecao_produtos_front.php">Continuar Comprando</a>&nbsp;&nbsp;
        <a href="finalizacompra.php">Finalizar Compra</a>
        
        </form>
    </div>
        <?php
        echo "</div>"
        ?>
    <?php 
        include "../usuario/selecao_produto_back.php";

        // <!--<img src='img/".$linha['imagem']."' height=250 width=250>-->

        if ($qtde == 0) 
        {
            echo "Não foi encontrado nenhum produto !!!<br><br>";
            return;
        }

        echo "<div class='content'>";
        echo "<div class='divproduto'>";

        // Criar linhas com os dados dos produtos
        foreach ($resultado_lista as $linha)
        {
            $preco= number_format($linha['preco'], 2, ',', '.');

            echo "<div class='cada_prod'>
                <div class='imgproduto' >
                    <br>
                    <a href='../usuario/selecao_detalhes_front.php?id=".$linha['id_produto']."'> 
                       <img src='../img/icon_produto.png'/>
                    </a>
                </div>

                <div>
                    <div class='textocomprar'><p>".$linha['nome']."</p><br>
                    <div>R$ ".$preco."</div></div><br>";

                    if ($linha['quantidade']<=0)
                    {
                        echo "
                        <div><span style='color:red'>Produto esgotado</span></div>";
                    }
					
					echo "<br><a class='botaocomprar' href='../usuario/carrinho_front.php?acao=add&codproduto=".$linha['id_produto']."'>Comprar</a>";

                echo "</div><br>";
            echo "</div>";
        }

        echo "</div>";
        echo "</div>";
    ?>
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
     <!--fim da div mae-->
    <footer>
        <a> </a>
    </footer>
</body>
</html>
