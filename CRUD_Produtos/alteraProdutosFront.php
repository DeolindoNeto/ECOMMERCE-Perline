<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perline Art</title>
</head>
<body>
    <?php
        $id_produto = $_GET['id_produto'];
        include "./get_InfoProduto.php";

    ?>

<center><div class="menu"><br><br><br>
            <h1>Alteração de produtos</h1><br>
            <form action="./alteraProdutoBack.php" method="post">
            <table>
                <label>ID do produto: </label><input type="number" name="id_produto" 
                value="<?php echo $linha['id_produto']; ?>">
                <tr align="left">
                    <th width="300px"><p>Nome do produto:</p></th>
                    <th width="300px"><input type="text" name="PRODUCTNAME" maxlength="70" size="26" value="<?php echo $linha['nome']; ?>"></th>
                </tr>
                <tr align="left">
                   <th><p>Preço:</p></th>
                   <th><input type="number" name="PRODUCTPRICE" placeholder="Ex. 9.99" value="<?php echo $linha['preco']; ?>"></th>
                </tr>
                <tr align="left">
                   <th><p>Código visual:</p></th>
                   <th><input type="text" name="PRODUCTCODE" maxlength="50" size="26" value="<?php echo $linha['codigo_visual']; ?>"></th>
                </tr>
                <tr align="left">
                   <th><p>Custo:</p></th>
                   <th><input type="number" name="PRODUCTCOST" placeholder="Ex. 9.99" value="<?php echo $linha['custo']; ?>" ></th>
                </tr>
                <tr align="left">
                   <th><p>Preço de Venda:</p></th>
                   <th><input type="number" name="PRODUCTSELLPRICE" placeholder="Ex. 9.99" value="<?php echo $linha['preco_venda']; ?>" ></th>
                </tr>
                <tr align="left">
                   <th><p>Margem de lucro (%):</p></th>
                   <th><input type="number" name="PRODUCTMARGIN" placeholder="Ex. 33.33" value="<?php echo $linha['margem_lucro']; ?>" ></th>
                </tr>
                <tr align="left">
                   <th><p>ICMS (%):</p></th>
                   <th><input type="number" name="PRODUCTICMS" placeholder="Ex. 33.33" value="<?php echo $linha['icms']; ?>" ></th>
                </tr>
                <tr align="left">
                    <th><p>Imagem:</p></th>
                    <th><input type="text" name="PRODUCTIMAGE" maxlength="200" size="26" value="<?php echo $linha['campo_imagem']; ?>" ></th>
                </tr>
                <tr align="left">
                    <th><p>Quantidade:</p></th>
                    <th><input type="number" name="PRODUCTQTDE" maxlength="200" size="26" value="<?php echo $linha['quantidade']; ?>" ></th>
                </tr>
                <tr align="left">
                   <th><p>Manufaturado?</p></th>
                   <th><input type="radio" name="PRODUCTMANFACTURED" value="Sim" checked >SIM
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
</body>
</html>