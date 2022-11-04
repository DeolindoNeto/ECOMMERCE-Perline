<!DOCTYPE html>
<link rel="stylesheet" href="../css/menuLateral.css">
<div class="mae">
<input type="checkbox" id="check">
<?php
    //session_start();
    $id_user = 1; // Depois precisamos alterar para pegar da $_SESSION
    include "./finaliza_compra_back.php";
?> 
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
    
        <div class="cada_prodindexfinal">    
                        <div>
                            <br>
                            <p class="pp">Pedido confirmado</p><br>
                            <br><p class="pf">Sua compra foi realizada com sucesso!</p><br>
                            <p class="pfinobg">Obrigado por escolher nossa loja.</p><br><br><br>
                            <p class="pfin">Verifique os detalhes e o valor da compra efetuada no link: <a class="email" href="https://mail.google.com">Email</a></p>
                        </div>
        </div>
    <br><br>



   
    <a class="afinal" href="./selecao_produto_front.php">Voltar</a>
</div>