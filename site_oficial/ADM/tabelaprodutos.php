<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> H O M E
    </title>
    <link rel="stylesheet" href="../css/menuLateral.css">
    <link rel="shortcut icon" href="unesp.ico" type="image/x-icon">
	<link rel="icon" href="../img/faviconprod.png"> <!--icone na guia-->
</head>

    <?php
        session_start();
        $acao = $_GET['acao'] ?? '';
        $id_produto = $_GET['id_produto'] ?? 0;
        $id_user = $_SESSION['usuariologado']['id_user'];
    
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
<<<<<<< HEAD

        <input type="checkbox" id="check" checked>
            <header>
<<<<<<< HEAD
=======
=======
       
    <input type="checkbox" id="check" checked>
        <header>
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
>>>>>>> c4f2324173fa66c97c851030e991888111a201c5
>>>>>>> parent of a2b1413 (.)

                <div class="carrinhohome" >
                    <label for="check" class="admsumir">
                        <abbr title="Carrinho"><img  id="btnSidebar" src="../img/icon_menu_sacola.png" class="admsumir"></abbr>
                    </label>
                </div>
                
                <abbr class="logo_perline" title="Perline"><img src="../img/PERLINE.png" width="70%"></abbr>
                
                <div class="header-btn">
                <abbr title="Home"><a href="../ADM/indexadm.php"><img class="header-btn-home" src="../img/icon_menu_home.png"></a></abbr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <abbr title="Home"><a href="#"><img class="header-btn-local" src="../img/icon_menu_mapa.png"></a></abbr>
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
                        <a class="prod" id="home-btn" title="Home" href="../ADM/indexadm.php">Home</a> 
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="prod" id="prod-sublinhado" title="Produtos" href="../ADM/tabelaprodutos.php">Produtos</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="prod" title="Usuários" href="../ADM/tabelausuarios.php">Usuários</a>
                    </center>
                </div>
            </div>

            
            <div class="content-tabela-produto-adm">
                <?php
                    include "./tabelaprodutos_back.php";

                        if ($qtde == 0) {
                            echo "Nenhum produto encontrado!<br><br>";
                            return;
                        }
                        
                            // Começar tabela e criar o cabeçalho
                            echo "<br><br>
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
                <div class="content-footer-home">
                </div>
            </footer>
        <script src="script.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </div> <!--fim da div mae-->
</body>
</html>

