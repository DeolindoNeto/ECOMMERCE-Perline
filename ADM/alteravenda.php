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
        <div class="divfaixa"> 
        </div>    
        <a name="topo"></a>
        <br><br><br><br><br>
        
        <!-- Início da página -->
        <center><div class="menu"><br><br><br>
        <?php 
            include "./conexao.php"; 
            $id_venda = $_GET["id_venda"];
            $sql = "SELECT * FROM Venda WHERE id_venda=$id_venda;";
            $resultado=pg_query($conecta,$sql);
            $qtde=pg_num_rows($resultado);
            $linha = pg_fetch_array($resultado);
            if ( $qtde == 0 )
            {
                echo '<script language="javascript">';
                echo "alert('Venda não encontrada!')";
                echo '</script>';	
                echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=admhome.php'>";
                exit;
            }
                pg_close($conecta);
        ?>
            <h1>Alteração de Venda</h1><br>
            <form action="" method="post">
            <table>
                <tr align="left">
                    <th width="300px"><p>ID da Venda:</p></th>
                    <th width="300px"><input type='number' size='26' value="<?php echo "".$linha['id_venda'].""; ?>" readonly></th>
                </tr>
                <tr align="left">
                    <th><p>ID do comprador:</p></th>
                    <th><input type="text" name="SELLBUYER"  value="<?php echo "".$linha['id_user'].""; ?>" required></th>
                </tr>
                <tr align="left">
                    <th><p>Data da venda:</p></th>
                    <th><input type="text" name="SELLDATE"  value="<?php echo "".$linha['data_hora_venda'].""; ?>"></th>
                </tr>
                <tr align="left">
                    <th><p>Observações:</p></th>
                    <th><input type="text" name="SELLOBS"  value="<?php echo "".$linha['observacoes'].""; ?>"></th>
                </tr>
                <tr align="left">
                    <th><p>Forma de Pagamento:</p></th>
                    <th><input type="text" name="SELLPAYMENT"  value="<?php echo "".$linha['forma_pgto'].""; ?>"></th>
                </tr>
                <tr>
                    <th colspan="2"><input type="submit" value="Alterar Venda">&nbsp;&nbsp;<input type="reset" value="Limpar Alterações"></th>
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
                        <td><white>Evenly Mayra - n°15 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </white></td>
                        <td><white>Mariana Caroline - n°28 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </white></td>
                        <td><white>Matheus Soares - n°30</white></td>
                    </tr>
                </table>

            </center>
        </div>
    </body>
</html>