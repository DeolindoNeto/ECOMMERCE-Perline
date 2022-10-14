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
               <a class="prod" title="Home" href="../usuario/index.php">Home</a> 
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
