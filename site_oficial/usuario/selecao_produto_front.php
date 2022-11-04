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

        <input type="checkbox" id="check" checked>
        <header>

            <div class="carrinhohome">
                <label for="check">
                    <abbr title="Carrinho"><img  id="btnSidebar" src="../img/icon_menu_sacola.png"></abbr>
                </label>
            </div>
            
            <abbr class="logo_perline" title="Perline"><img src="../img/PERLINE.png" width="70%"></abbr>
            
            <div class="header-btn">
                <abbr title="Home"><a href="../usuario/index.php"><img class="header-btn-home" src="../img/icon_menu_home.png"></a></abbr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <abbr title="Local"><a href="../usuario/local.php"><img class="header-btn-local" src="../img/icon_menu_mapa.png"></a></abbr>
                <?php
                    if($_SESSION['usuariologado']){
                        echo "<abbr title='Login'><a href='../usuario/logoff_back.php'><img class='header-btn-login' src='../img/icon_logoff.png' width='35px' height='35px'></a></abbr>&nbsp;&nbsp;&nbsp;&nbsp;";
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
                    <a class="prod" id="home-btn" title="Home" href="../usuario/index.php">Home</a> 
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="prod" id="prod-sublinhado" title="Produtos" href="../usuario/selecao_produto_front.php">Produtos</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="prod" title="Quem Somos" href="http://ftp.projetoscti.com.br/projetoscti21/entregadesen/usuario/desen.html">Quem Somos</a>
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
                        if($res_lista)
                        foreach ($res_lista as $linhacar)
                        {
                            $id_produto = $linhacar['id_produto'];
                            $total += floatval($linhacar['subtotal']);
                            if($id_produto == 0)
                            {
                                echo"Nenhum produto adicionado";
                            }
                            
                    ?>        
                    
                            <div class="row">
                                <div class="cell cellNome">
                                <?php echo "<b>" .$linhacar['nome']; "<b>"?>
                                
                                    <?php echo $linhacar['preco']; ?>
                                
                                    <input type="number" name="prod[<?php echo $id_produto; ?>]"
                                        value="<?php echo $linhacar['qtde']; ?>" />
                        
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
            if ($resultado_lista)
            foreach ($resultado_lista as $linha)
            {
                $preco= number_format($linha['preco'], 2, ',', '.');
                $imagemproduto = $linha['campo_imagem'];

                echo "<div class='cada_prod'>
                    <div class='imgproduto' >
                        <br>
                        <a href='../usuario/selecao_detalhes_front.php?id_produto=".$linha['id_produto']."&imgprod=".$linha['campo_imagem']."'> 
                        <img src='../img/$imagemproduto' width='160px' height='160px'>
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
                        
                        echo "<br><a class=botaocomprar href='carrinho_back.php?acao=add&id_produto=".$linha['id_produto']."'>Comprar</a>";

                    echo "</div><br>";
                echo "</div>";
            }
        ?>    
        <script src="script.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </div> <!--fim da div mae-->
</body>
</html>