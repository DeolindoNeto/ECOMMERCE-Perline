<link rel="stylesheet" href="../css/menuLateral.css">
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
            <iframe src="http://ftp.projetoscti.com.br/projetoscti21/site_oficial/usuario/carrinho_front.php" width="285" height="675"></iframe>
        </center>
    </div>
<?php
    //session_start();
    $id_user = 1; // Depois precisamos alterar para pegar da $_SESSION
    include "./finaliza_compra_back.php";

    echo "<h1>Compra Finalizada com Sucesso!!!</h1>";
?>

<a href="./selecao_produto_front.php">Voltar</a>
</div>