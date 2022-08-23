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
            $id_itemVenda = $_GET["id_itemVenda"];
            $sql = "SELECT * FROM ItemVenda WHERE id_itemVenda=$id_itemVenda;";
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
            <h1>Alteração de Item-Venda</h1><br>
            <form action="" method="post">
            <table class="table3">
               <tr align="left">
                    <th width="300px"><p>ID:</p></th>
                    <th width="300px"><input type='number' size='26' value="<?php echo "".$linha['id_itemvenda'].""; ?>" readonly></th>
                </tr>
                <tr align="left">
                    <th><p>ID da Venda:</p></th>
                    <th><input type='number' name="SELL_SOLD" size='26' value="<?php echo "".$linha['id_venda'].""; ?>" required></th>
                </tr>
                <tr align="left">
                    <th><p>ID do item:</p></th>
                    <th><input type="number" name="SELL_PRODUCT" value="<?php echo "".$linha['id_produto'].""; ?>" required></th>
                </tr>
                <tr align="left">
                    <th><p>Quantidade:</p></th>
                    <th><input type="number" name="SELL_QTDE" value="<?php echo "".$linha['qtde'].""; ?>" required></th>
                </tr>
                 <tr align="left">
                    <th><p>Data da venda:</p></th>
                    <th><input type="text" name="SELL_DATE" value="<?php echo "".$linha['data_hora_venda'].""; ?>"></th>
                </tr>
                <tr align="left">
                    <th><p>Valor unitário:</p></th>
                    <th><input type="TEXT" name="SELL_VALUE_UNITARY" placeholder="Ex. 9.99"  value="<?php echo "".$linha['valor_unit'].""; ?>" required></th>
                </tr>
                <tr align="left">
                    <th><p>Valor total:</p></th>
                    <th><input type="TEXT" name="SELL_VALUE_TOTAL" placeholder="Ex. 9.99" value="<?php echo "".$linha['valor_total'].""; ?>" required></th>
                </tr>
                <tr>
                    <th colspan="2"><input type="submit" value="Alterar Item-Venda">&nbsp;&nbsp;<input type="reset" value="Limpar Alterações"></th>
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