<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>L O C A L</title>
    <link rel="stylesheet" type="text/css" href="../css/menuLateral.css"> <!--conectando com o styles-->
    <link rel="icon" href="../img/faviconlocal.png">
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
                <abbr title="Home"><a href="./index.php"><img class="header-btn-home" src="../img/icon_menu_home.png"></a></abbr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <abbr title="Local"><a href="../usuario/local.php"><img class="header-btn-local" src="../img/icon_menu_mapa.png"></a></abbr>
                <abbr title="Login"><a href="../usuario/login.html"><img class="header-btn-login" src="../img/icon_menu_login.png"></a></abbr>&nbsp;&nbsp;&nbsp;&nbsp;
            </div>  
        </header>

    
    <div class="tpfix2">
               <a class="frase_local">Venha conhecer nossa loja, esperamos você!</a>
    </div> 
    
    <br><br><br><br><br><br><br><br>
        <center>
            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1845.1651963744232!2d-49.02472998215596!3d-22.34115031972633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bf67ba4accea4f%3A0xc015eb23d210db44!2sCTI%20-%20Col%C3%A9gio%20T%C3%A9cnico%20Industrial%20%22Prof.%20Isaac%20Portal%20Rold%C3%A1n%22!5e0!3m2!1spt-BR!2sbr!4v1661573896005!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </center>
    <br><br>

      <footer>
      </footer>

    </div>
</body>
</html>
