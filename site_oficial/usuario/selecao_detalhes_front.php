<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>P R O D U T O S</title>
    <link rel="stylesheet" href="../css/menuLateral.css">
    <link rel="shortcut icon" href="unesp.ico" type="image/x-icon">
</head>

<body>
    <input type="checkbox" id="check">
    <header>
        <!--<label for="check">
            <abbr title="Carrinho"><img  id="btnSidebar" src="../img/icon_menu_sacola.png"></abbr>
        </label> -->
        
        <a id="titulo_home" title="Perline">P E R L I N E</a>
           
           <div id="icons_home">
           
           <abbr title="Local"><a href="../usuario/local.html"><img class="icon_menu_local" src="../img/icon_menu_mapa.png"></a></abbr>
           
           <abbr title="Login"><a href="../usuario/login.html"><img class="icon_menu_login" src="../img/icon_menu_login.png"></a></abbr>
           
           </div>  
    </header>
    
    <!--<div class="sidebar">
        <center>
           <!-- <div class="logo_no_carrinho">
                <h3><span>P E R L I N E</span>&nbsp;<abbr title="Perline"></abbr></h3>
            </div>
        </center>
    </div>-->
    
    <div class="tpfix2">
               
               <div class="botoes">
               <center>
               <a class="prod" title="Home" href="../usuario/index.html">Home</a> 
               &nbsp;&nbsp;&nbsp;&nbsp;
                
               <a class="prod" title="Produtos" href="../usuario/selecao_produto_front.php">Produtos</a>
               
               &nbsp;&nbsp;&nbsp;&nbsp;
               <a class="prod" title="Desenvolvedores" href="#">Desenvolvedores</a>
               
               &nbsp;&nbsp;&nbsp;&nbsp;
               <a class="prod" title="Quem Somos" href="#">Quem Somos</a>
               </center>
               </div>
               
    </div>  
    
    <div class="detalhes_produtos">
 <!-- Recuperando as informações do produto -->
        <?php
           $id_produto = $_GET["id"];
           include "../utils/info_produto_back.php"; 
        ?>

    <div>
        <h1>
        <?php echo $linha['nome'];?>
        </h1>

        <img src='../img/icon_produto.png' />
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
        &nbsp;<a href="../usuario/selecao_produto_front.php">Voltar</a>
    </div>
    
    </div>

    </div> <!--fim da div mae-->
    <footer>
        <a> </a>
    </footer>
</body>
</html>


