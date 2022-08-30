<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>P R O D U T O S</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
       
    <div class="mae">
       
       <div class="tpfix">
        
           
         
           <abbr title="Home"><a href="index.html"><img class="icon_menu_home" src="../imagens/icon_menu_home.png"></a></abbr>
           
           <a id="titulo_login">P E R L I N E</a>
            
           <div id="icons_login">
           
           <abbr title="Local"><a href="local.html"><img class="icon_menu_local" src="../imagens/icon_menu_mapa.png"></a></abbr>
           
           <abbr title="Login"><a href="login.html"><img class="icon_menu_login" src="../imagens/icon_menu_login.png"></a></abbr>
           
           <abbr title="Carrinho"><a href=#><img class="icon_menu_sacola" src="../imagens/icon_menu_sacola.png"></a></abbr>
           </div>  
           
           <div class="tpfix2">
             
               <div class="botoes">
               <a class="prod" title="Produtos" href="tabelaprodutos.php">Produtos</a>
               &nbsp;&nbsp;&nbsp;&nbsp;
               <a class="desen" title="Desenvolvedores" href="#">Desenvolvedores</a>
               &nbsp;&nbsp;&nbsp;&nbsp;
               <a class="quem" title="Quem Somos" href="#">Quem Somos</a>
               </div>
          </div> 
          
    </div>
        
        <?php
            include "./tabelaprodutos_back.php";

            if ($qtde == 0) {
                echo "Nenhum produto encontrado!<br><br>";
                return;
            }
            
    // Começar tabela e criar o cabeçalho
    echo "
    <div class='table'>
        <div class='row'>
            <div class='celula celulacod cellHeader'>
                Cód. Produto
            </div>
            <div class='celula celulanome cellHeader'>
                Nome
            </div>
            <div class='celula celulapreco cellHeader'>
                Preço
            </div>
            <div class='celula celulaacoes'>
                &nbsp;
            </div>
        </div>";

    // Criar linhas com os dados dos produtos
        foreach ($resultado_lista as $linha)
        {
            echo "
            <div class='row'>
                <div class='celula celulacod'>
                    ".$linha['id_produto']."
                </div>
                <div class='celula celulanome'>
                    ".$linha['nome']."
                </div>
                <div class='celula celulapreco'>
                    ".$linha['preco']."
                </div>
                <div class='celula celulaacoes'>
                    <a href='alteraproduto.php?id_produto=".$linha['id_produto']."'> Alterar</a>&nbsp;
                    <a href='excluiProdutoFront.php?id_produto=".$linha['id_produto']."'> Excluir</a>&nbsp;
                </div>
            </div> "; 
        } 
    // Fechando a tag da tabela
    echo "</div>";
        ?>
        
        
        </div>
        
    <footer>
        <a> </a>
    </footer>
</body>
</html>