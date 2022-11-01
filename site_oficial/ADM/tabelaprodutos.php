<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>P R O D U T O S</title>
    <link rel="stylesheet" type="text/css" href="styles.css" href="../css/menuLateral.css">
</head>
<style>
    header {
        transition: 0.2s;
        position: fixed;
        height: 9%;
        width: 100%;
        top: 0;
        left: 0;
        background-color: #1ABC9C;
        display: flex;
        align-items: center;
        text-align: center;
        z-index: 999999;
    }
    .tpfix2
{
    position: fixed;
    height: 5%;
    width: 100%;
    top: 9%;
    left: 0;
    background-color: #fff;
    display: flex;
    align-items: center;
    color: black;
    font-family: 'Poppins', sans-serif;
    text-align: center;
    z-index: 999999;
    box-shadow: 10px 13px 18px -1px rgba(0,0,0,0.05);
}

</style>
<body>
       
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
                <abbr title="Local"><a href="../usuario/local.html"><img class="header-btn-local" src="../img/icon_menu_mapa.png"></a></abbr>
                <?php
                    if($_SESSION['usuariologado']){
                        echo "<abbr title='Login'><a href='../usuario/logoff_back.php'><img class='header-btn-login' src='../img/icon_logoff.png' width='40px' height='40px'></a></abbr>&nbsp;&nbsp;&nbsp;&nbsp;";
                    }
                    else
                    {
                        echo "<abbr title='Login'><a href='../usuario/login.html'><img class='header-btn-login' src='../img/icon_menu_login.png'></a></abbr>&nbsp;&nbsp;&nbsp;&nbsp;";
                    }
                ?>

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
                    <a class="prod" title="Quem Somos" href="quemsomos.php">Quem Somos</a>
                </center>
            </div>
        </div>

        <?php
            include "./tabelaprodutos_back.php";

            if ($qtde == 0) {
                echo "Nenhum produto encontrado!<br><br>";
                return;
            }
            
    // Começar tabela e criar o cabeçalho
    echo "<br><br><br><br>
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
                    <a href='alteraProdutosFront.php?id_produto=".$linha['id_produto']."'> Alterar</a>&nbsp;
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