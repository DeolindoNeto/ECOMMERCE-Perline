<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>P R O D U T O S</title>
    <link rel="stylesheet" href="../css/menuLateralmobile.css">
    <link rel="shortcut icon" href="unesp.ico" type="image/x-icon">
	<link rel="icon" href="../img/faviconprod.png"> <!--icone na guia-->
</head>

<body>
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
           <abbr title="Local"><a href="../mobile/local.html"><img class="icon_menu_local" src="../img/icon_menu_mapa.png"></a></abbr>
           <abbr title="Login"><a href="../mobile/login.html"><img class="icon_menu_login" src="../img/icon_menu_login.png"></a></abbr>&nbsp;&nbsp;&nbsp;&nbsp;
           </div>  
    </header>
    
    <div class="sidebar">
        <center>
           <!-- <div class="logo_no_carrinho">
                <h3><span>P E R L I N E</span>&nbsp;<abbr title="Perline"></abbr></h3>
            </div> -->
        </center>
    </div>
    
    <!--<div class="sidebar">
        <center>
           <!-- <div class="logo_no_carrinho">
                <h3><span>P E R L I N E</span>&nbsp;<abbr title="Perline"></abbr></h3>
            </div>
        </center>
    </div>-->
    
    
    <?php 
        include "../mobile/selecao_produto_back.php";

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
                    <a href='../mobile/selecao_detalhes_front.php?id=".$linha['id_produto']."'> 
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
					
					echo "<br><a class='botaocomprar' href='../mobile/carrinho_front.php?acao=add&codproduto=".$linha['id_produto']."'>Comprar</a>";

                echo "</div><br>";
            echo "</div>";
        }

        echo "</div>";
        echo "</div>";
        echo "<br><br><br><br><br><br><br";
    ?>
    
     <!--fim da div mae-->
    <footer>
            <div class="navegacao"> 
                Navegação<br><br>
                <a class="btnnav1" title="Produtos" href="../mobile/selecao_produto_front.php">Produtos</a>
                <br>
                <a class="btnnav2" title="Quem Somos" href="./quemsomos.html">Quem Somos</a>
                <br>
                <a class="btnnav3" title="Local" href="../mobile/local.html">Loja física</a><br><br><br><br>
            </div>
            
            <div class="desenvolvedores"> 
                <br>Desenvolvedores<br><br>
                Camila Eduarda Favaro<br>
                Deolindo Scandolera Neto<br>
                Evelyn Mayra Pinheiro Lopes<br>
                Mariana Caroline Silva<br>
                Matheus Gimenes Soares<br><br><br>
            </div>
        </footer>
</body>
</html>
