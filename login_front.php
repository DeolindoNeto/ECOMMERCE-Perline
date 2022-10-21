<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>L O G I N</title>
    <link rel="stylesheet" href="../css/menuLateral.css">
    <link rel="shortcut icon" href="unesp.ico" type="image/x-icon">
    <link rel="icon" href="../img/faviconlogin.png"> <!--icone na guia-->
</head>

<body>
    <input type="checkbox" id="check">
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
                <abbr title="Login"><a href="../usuario/login.html"><img class="header-btn-login" src="../img/icon_menu_login.png"></a></abbr>&nbsp;&nbsp;&nbsp;&nbsp;
            </div>  
        </header>

        <div class="tpfix2">
                
            <div class="tpfix2-btn">
                <center>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="prod" id="home-btn" title="Home" href="../usuario/index.php">Home</a> 
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="prod" title="Produtos" href="../usuario/selecao_produto_front.php">Produtos</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="prod" title="Quem Somos" href="quemsomos.html">Quem Somos</a>
                </center>
            </div>
        </div>
    
    
    <div class="content">

            <form method="post" class="card" action="login_back.php">

                <div class="card-header_login">
                    <center>
                    <h2>Login</h2>
                    </center>

                </div>

                <div class="card-content_login">

                    <div class="card-content-area_login">

                        <label >Usuário</label>

                        <input type="text" class="form-control" id="usuario" name="usuario">

                    </div>

                    <div class="card-content-area_login">

                        <label >Senha</label>

                        <input type="password" class="form-control" id="senha" name="senha">

                    </div>

                </div>

                <div class="card-footer">
                    
                    <a class="esquesenha" href="#">Esqueceu a senha?</a>

                    <input type="submit" value="Login">

                </div>
                
                <a class="criarconta" href="../usuario/cadastro_usuario_front.html" >Ainda não tem uma conta?</a>

            </form>
        </div>
    
</body>
</html>
