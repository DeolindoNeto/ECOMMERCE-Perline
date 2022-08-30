<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>P R O D U T O S</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
       
    <div class="mae">
       
       <div class="tpfix">
        
           
         
           <abbr title="Home"><a href="index.html"><img class="icon_menu_home" src="icon_menu_home.png"></a></abbr>
           
           <a id="titulo_login">P E R L I N E</a>
            
           <div id="icons_login">
           
           <abbr title="Local"><a href="local.html"><img class="icon_menu_local" src="icon_menu_mapa.png"></a></abbr>
           
           <abbr title="Login"><a href="login.html"><img class="icon_menu_login" src="icon_menu_login.png"></a></abbr>
           
           <abbr title="Carrinho"><a href=#><img class="icon_menu_sacola" src="icon_menu_sacola.png"></a></abbr>
           </div>  
           
           <div class="tpfix2">
             
               <div class="botoes">
               <a class="prod" title="Produtos" href="tabelaprodutos.php">Produtos</a>
               &nbsp;&nbsp;&nbsp;&nbsp;
               <a class="desen" title="Desenvolvedores" href="#">Desenvolvedores</a>
               &nbsp;&nbsp;&nbsp;&nbsp;
               <a class="quem" title="Quem Somos" href="#">Quem Somos</a>
               </div>
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