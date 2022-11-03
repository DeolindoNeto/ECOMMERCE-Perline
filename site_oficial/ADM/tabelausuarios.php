<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>P R O D U T O S</title>
    <link rel="stylesheet" type="text/css" href="./styles.css">
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
            include "./tabelausuarios_back.php";

            if ($qtde == 0) {
                echo "Nenhum produto encontrado!<br><br>";
                return;
            }
            
    // Começar tabela e criar o cabeçalho
    echo "
    <div class='table_usuario'>
        <div class='row_usuario'>
            <div class='celula_usuario celulaid_usuario cellHeader_usuario'>
                ID Usuário
            </div>
            <div class='celula_usuario celulanome_usuario cellHeader_usuario'>
                Nome
            </div>
            <div class='celula_usuario celulaemail cellHeader_usuario'>
                E-mail
            </div>
            <div class='celula_usuario celulatelefone cellHeader_usuario'>
                Telefone
            </div>
            <div class='celula_usuario celulacpf cellHeader_usuario'>
                CPF
            </div>
            <div class='celula_usuario celulaacoes_usuario'>
                &nbsp;
            </div>
        </div>";

    // Criar linhas com os dados dos produtos
        foreach ($resultado_lista as $linha)
        {
            echo "
            <div class='row_usuario'>
                <div class='celula_usuario celulaid_usuario'>
                    ".$linha['id_user']."
                </div>
                <div class='celula_usuario celulanome_usuario'>
                    ".$linha['nome_user']."
                </div>
                <div class='celula_usuario celulaemail'>
                    ".$linha['email']."
                </div>
                <div class='celula_usuario celulatelefone'>
                    ".$linha['telefone']."
                </div>
                <div class='celula_usuario celulacpf'>
                    ".$linha['cpf_user']."
                </div>
                <div class='celula_usuario celulaacoes_usuario'>
                    <a href='alteraUsuarioFront.php?id_user=".$linha['id_user']."'> Alterar</a>&nbsp;
                    <a href='excluiusuario.php?id_user=".$linha['id_user']."'> Excluir</a>&nbsp;
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