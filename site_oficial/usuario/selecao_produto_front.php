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
    
     <!--fim da div mae-->
    <footer>
        <a> </a>
    </footer>
</body>
</html>