<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>P R O D U T O S</title>
    <link rel="stylesheet" type="text/css" href="styles.css"> <!--conectando com o styles-->
    <link rel="icon" href="favicon.png"> <!--icone na guia-->
</head>
<body>
     <div class="mae">
  
    <div class="tpfix">
           
           <abbr title="Home"><a href=#><img class="icon_menu_home" src="../imagens/icon_menu_home.png"></a></abbr>

           
           <a id="titulo_home" title="Perline">P E R L I N E</a>
           
           <div id="icons_home">
           
           <abbr title="Local"><a href=#><img class="icon_menu_local" src="../imagens/icon_menu_mapa.png"></a></abbr>
           
           <abbr title="Login"><a href=#><img class="icon_menu_login" src="../imagens/icon_menu_login.png"></a></abbr>
           
           <abbr title="Carrinho"><a href=#><img class="icon_menu_sacola" src="../imagens/icon_menu_sacola.png"></a></abbr>
           
           </div>  
          
    </div>

    <div class="tpfix2">
             
               <div class="botoes">
               <a class="prod" title="Produtos" href="selecao_produto_front.php">Produtos</a>
               &nbsp;&nbsp;&nbsp;&nbsp;
               <a class="desen" title="Desenvolvedores" href="#">Desenvolvedores</a>
               &nbsp;&nbsp;&nbsp;&nbsp;
               <a class="quem" title="Quem Somos" href="#">Quem Somos</a>
               </div>
    </div> 
    
    <div class="detalhes_produtos">
 <!-- Recuperando as informações do produto -->
        <?php
           $id_produto = $_GET["id"];
           include "info_produto_back.php"; 
        ?>

    <div>
        <h1>
        <?php echo $linha['nome'];?>
        </h1>
        <img src="../imagens/sonserina.png" width="70%"> <br />
        <br><br>
        Id do produto:<?php echo $linha['id_produto']; ?>
        <br><br>
        Nome: <?php echo $linha['nome']; ?>
        <br><br>
        Quantidade: <?php echo $linha['quantidade']; ?>
        <br><br>
        Preço: R$ <?php echo number_format($linha['preco'], 2, ',', '.'); ?>
        <br><br>
        Manufaturado: <?php echo $linha['manufaturado']; ?>
        <br><br>
        <a href='carrinho_front.php?acao=add&codproduto=<?php echo $id_produto; ?>'>Comprar</a>
        &nbsp;<a href="selecao_produto_front.php">Voltar</a>
    </div>
    
    </div>

    </div> <!--fim da div mae-->
    <footer>
        <a> </a>
    </footer>
</body>
</html>


