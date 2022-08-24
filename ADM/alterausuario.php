<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Perline</title>
        <link rel="stylesheet" type="text/css" href="../estilo.css">
    </head>
    <body>
     <div class="divfixa">
        <div class="divimg"><img src="../imagens/logo.png" height="90px"></div>
            <br><br>
            <table width="85%">
                <tr>
                    <th align="left">
                    <a class="botao" href="../index.html" target="_blank">Home</a>&nbsp;
                    <a class="botao" href="#Produtos" target="_blank">Produtos</a>&nbsp;
                    <a class="botao" href="../local.html" target="_blank">Conheça Nossa Loja Física</a>&nbsp;
                    <a class="botao" href="../sobre.html" target="_blank">Sobre</a>&nbsp;
                    <a class="botao" href="../patrocinadores.html" target="_blank">Patrocinadores</a>&nbsp;
                    </th>
                    <th align="right">
                    <a class="botao" href="#Carrinho" target="_blank">Carrinho</a>&nbsp;
                    <a class="botao" href="./login.html" target="_blank">Login</a>&nbsp;
                    </th>
                </tr>
            </table>       
        </div>    
        <a name="topo"></a>
        <br><br><br><br><br>
        
        <!-- Início da página -->
        <center><div class="menu"><br><br><br>
        <?php 
            include "./conection.php"; 
            $id_user = $_GET["id_user"];
            $sql = "SELECT * FROM Usuario WHERE id_user=$id_user;";
            $resultado=pg_query($conecta,$sql);
            $qtde=pg_num_rows($resultado);
            $linha = pg_fetch_array($resultado);
            if ( $qtde == 0 )
            {
                echo '<script language="javascript">';
                echo "alert('Usuário não encontrado!')";
                echo '</script>';	
                echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=admhome.php'>";
                exit;
            }
                pg_close($conecta);
        ?>
            <h1>Alteração de Usuário</h1><br>
            <form action="./alteraUserBack.php" method="post">
            <table class="table3">
               <tr align="left">
                    <th width="300px"><p>ID:</p></th>
                    <th width="300px"><input type='number' size='26' value="<?php echo "".$linha['id_user'].""; ?>" readonly></th>
                </tr>
                <tr align="left">
                    <th><p>Nome:</p></th>
                    <th><input type="text" name="USERNAME" maxlength="80" size="26" value="<?php echo "".$linha['nome_user'].""; ?>" required></th>
                </tr>
                <tr align="left">
                   <th><p>E-mail:</p></th>
                   <th><input type="email" name="USEREMAIL" maxlength="40" size="26" value="<?php echo "".$linha['email'].""; ?>" required></th>
                </tr>
                <tr align="left">
                   <th><p>Telefone:</p></th>
                   <th><input type="text" name="USERTEL" maxlength="11" placeholder="Ex. 14999999999 ou 143103-9999" size="26" value="<?php echo "".$linha['telefone'].""; ?>" required></th>
                </tr>
                <tr align="left">
                   <th><p>CPF:</p></th>
                   <th><input type="number" name="USERCPF" placeholder="Somente números" max="99999999999" value="<?php echo "".$linha['cpf_user'].""; ?>" required></th>
                </tr>
                <tr align="left">
                   <th><p>CEP:</p></th>
                   <th><input type="number" name="USERCEP" placeholder="Somente números" max="99999999" value="<?php echo "".$linha['cep_user'].""; ?>" required></th>
                </tr>
                <tr align="left">
                   <th><p>Data de nascimento:</p></th>
                   <th><input type="text" name="USERBIRTH" required value="<?php echo "".$linha['data_nasc'].""; ?>"></th>
                </tr>
                <tr align="left">
                   <th><p>Sexo:</p></th>
                   <th><input type="radio" name="USERSEX" value="MAS" required>MASCULINO
                   <input type="radio" name="USERSEX" value="FEM" required>FEMININO</th>
                </tr>
                <tr align="left">
                   <th><p>ADM:</p></th>
                   <th><input type="radio" name="ADM" value="TRUE" required>SIM
                   <input type="radio" name="ADM" value="FALSE" required>NÃO</th>
                </tr>
                <tr>
                    <th colspan="2"><input type="submit" value="Alterar Usuário">&nbsp;&nbsp;<input type="reset" value="Limpar Alterações"></th>
                </tr>        
            </table>
            </form><br>
            
            <br><br><br><br><br>
        </div></center>
    
        
        <!-- Fim da página -->
        
        <div id="divrodape">
            <center>
                <br>
                <a class="voltar" href="#topo">Clique aqui para voltar ao topo</a>
                <br><hr><br>
                <a class="botao" href="../index.html" target="_blank">Home</a>&nbsp;
                <a class="botao" href="#Produtos" target="_blank">Produtos</a>&nbsp;
                <a class="botao" href="../local.html" target="_blank">Conheça Nossa Loja Física</a>&nbsp;
                <a class="botao" href="../sobre.html" target="_blank">Sobre</a>&nbsp;
                <a class="botao" href="../patrocinadores.html" target="_blank">Patrocinadores</a>&nbsp;
                <a class="botao" href="#Carrinho" target="_blank">Carrinho</a>&nbsp;
                <a class="botao" href="../login.html" target="_blank">Login</a>&nbsp;
                <br><br><hr>
                <table>
                    <tr>
                        <td><white>Camila Eduarda - n°8 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </white></td>
                        <td><white>Deolindo Neto - n°12 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </white></td>
                        <td><white>Evelyn Mayra - n°15 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </white></td>
                        <td><white>Mariana Caroline - n°28 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </white></td>
                        <td><white>Matheus Soares - n°30</white></td>
                    </tr>
                </table>

            </center>
        </div>
    </body>
</html>