<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>P R O D U T O S</title>
    <link rel="stylesheet" type="text/css" href="./styles.css"> <!--conectando com o styles-->
    <link rel="icon" href="../imagens/favicon.png"> <!--icone na guia-->
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
               <a class="prod" title="Produtos" href="./selecao_produto_front.php">Produtos</a>
               &nbsp;&nbsp;&nbsp;&nbsp;
               <a class="desen" title="Desenvolvedores" href="#">Desenvolvedores</a>
               &nbsp;&nbsp;&nbsp;&nbsp;
               <a class="quem" title="Quem Somos" href="#">Quem Somos</a>
               </div>
    </div> 
    
    <?php 
        include "./selecao_produto_back.php";

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
                <div>
                    <br>
                    <a href='selecao_detalhes_front.php?id=".$linha['id_produto']."'> 
                    <img src='../imagens/pulseira_hp.png'>
                    </a>
                </div>
                <div>
                    <div><p>".$linha['nome']."</p></div>
                    <div>R$ ".$preco."</div><br>";

                    if ($linha['quantidade']<=0)
                    {
                        echo "
                        <div><span style='color:red'>Produto esgotado</span></div>";
                    }
                    else
                    {
                        echo "
                        <div>".$linha['quantidade']." em estoque</div>";
                    }
					
					echo "<a href='carrinho_front.php?acao=add&codproduto=".$linha['id_produto']."'>Comprar</a>";

                echo "</div><br>";
            echo "</div>";
        }

        echo "</div>";
        echo "</div>";

    ?>
    
    
    
    </div> <!--fim da div mae-->
    <footer>
        <a> </a>
    </footer>
</body>
</html>