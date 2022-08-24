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
                        <a class="botao" href="../index.html">Home</a>&nbsp;
                        <a class="botao" href="#Produtos" target="_blank">Produtos</a>&nbsp;
                        <a class="botao" href="../local.html" target="_blank">Conheça Nossa Loja Física</a>&nbsp;
                        <a class="botao" href="../sobre.html" target="_blank">Sobre</a>&nbsp;
                        <a class="botao" href="../patrocinadores.html" target="_blank">Patrocinadores</a>&nbsp;
                        </th>
                        <th align="right">
                        <a class="botao" href="#Carrinho" target="_blank">Carrinho</a>&nbsp;
                        <a class="botao" href="../login.html" target="_blank">Login</a>&nbsp;
                        </th>
                    </tr>
                </table>       
            </div>  
        <a name="topo"></a>
        <br><br><br><br><br>
        
        <!-- Início da página -->
    <?php
        $id_produto = $_GET['id_produto'];
        include "./get_InfoProduto.php";

    ?>
            <center><div class="menu"><br><br><br>
            <h1>Alteração de produtos</h1><br>
            <form action="./alteraProdutoBack.php" method="post">
            <table>
                <label>ID do produto: </label><input type="number" name="id_produto" 
                value="<?php echo $linha['id_produto']; ?>" readonly>
                <tr align="left">
                    <th width="300px"><p>Nome do produto:</p></th>
                    <th width="300px"><input type="text" name="PRODUCTNAME" maxlength="70" size="26" value="<?php echo $linha['nome']; ?>" required></th>
                </tr>
                <tr align="left">
                   <th><p>Preço:</p></th>
                   <th><input type="number" name="PRODUCTPRICE" placeholder="Ex. 9.99" value="<?php echo $linha['preco']; ?>" required></th>
                </tr>
                <tr align="left">
                   <th><p>Código visual:</p></th>
                   <th><input type="text" name="PRODUCTCODE" maxlength="50" size="26" value="<?php echo $linha['codigo_visual']; ?> required"></th>
                </tr>
                <tr align="left">
                   <th><p>Custo:</p></th>
                   <th><input type="number" name="PRODUCTCOST" placeholder="Ex. 9.99" value="<?php echo $linha['custo']; ?>" required></th>
                </tr>
                <tr align="left">
                   <th><p>Preço de Venda:</p></th>
                   <th><input type="number" name="PRODUCTSELLPRICE" placeholder="Ex. 9.99" value="<?php echo $linha['preco_venda']; ?>" required></th>
                </tr>
                <tr align="left">
                   <th><p>Margem de lucro (%):</p></th>
                   <th><input type="number" name="PRODUCTMARGIN" placeholder="Ex. 33.33" value="<?php echo $linha['margem_lucro']; ?>" required></th>
                </tr>
                <tr align="left">
                   <th><p>ICMS (%):</p></th>
                   <th><input type="number" name="PRODUCTICMS" placeholder="Ex. 33.33" value="<?php echo $linha['icms']; ?>" required></th>
                </tr>
                <tr align="left">
                    <th><p>Imagem:</p></th>
                    <th><input type="text" name="PRODUCTIMAGE" maxlength="200" size="26" value="<?php echo $linha['campo_imagem']; ?>" required></th>
                </tr>
                <tr align="left">
                    <th><p>Quantidade:</p></th>
                    <th><input type="number" name="PRODUCTQTDE" maxlength="200" size="26" value="<?php echo $linha['quantidade']; ?>" required></th>
                </tr>
                <tr align="left">
                   <th><p>Manufaturado?</p></th>
                   <th><input type="radio" name="PRODUCTMANFACTURED" value="Sim" checked required>SIM
                   <input type="radio" name="PRODUCTMANFACTURED" value="Não" required>NÃO</th>
                </tr>
                <tr>
                    <th colspan="2"><input type="submit" value="Alterar">
                    &nbsp;&nbsp;
                    <input type="reset" value="Limpar" onclick="history.back()"></th>
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
                <a class="botao" href="./admhome.php">Menu de Desenvolvimento</a>&nbsp;
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