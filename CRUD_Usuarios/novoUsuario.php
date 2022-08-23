<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Perline Art</title>
</head>
<body>
        <!-- Início da página -->
        <center><div class="menu"><br><br><br>
            <h1>Cadastro de novo produto</h1><br>
            <form action="./novoProdutoback.php" method="post">
            <table>
                <tr align="left">
                    <th width="300px"><p>Nome do produto:</p></th>
                    <th width="300px"><input type="text" name="PRODUCTNAME" maxlength="70" size="26" placeholder="Ex: Pulseira de Pérolas" required></th>
                </tr>
                <tr align="left">
                   <th><p>Preço:</p></th>
                   <th><input type="number" name="PRODUCTPRICE" placeholder="Ex. 9,99" step="0.01" required></th>
                </tr>
                <tr align="left">
                   <th><p>Código visual:</p></th>
                   <th><input type="text" name="PRODUCTCODE" maxlength="50" size="26" placeholder="Ex: 40028922" required></th>
                </tr>
                <tr align="left">
                   <th><p>Custo:</p></th>
                   <th><input type="number" name="PRODUCTCOST" placeholder="Ex. 9,99" step="0.01" required></th>
                </tr>
                <tr align="left">
                   <th><p>Preço de Venda:</p></th>
                   <th><input type="number" name="PRODUCTSELLPRICE" placeholder="Ex. 9,99" step="0.01" required></th>
                </tr>
                <tr align="left">
                   <th><p>Margem de lucro (%):</p></th>
                   <th><input type="number" name="PRODUCTMARGIN" placeholder="Ex. 33,33" step="0.01" min="0"  required></th>
                </tr>
                <tr align="left">
                   <th><p>ICMS (%):</p></th>
                   <th><input type="number" name="PRODUCTICMS" placeholder="Ex. 33,33" step="0.01" min="0" max="100"  required></th>
                </tr>
                <tr align="left">
                    <th><p>Imagem:</p></th>
                    <th><input type="text" name="PRODUCTIMAGE" maxlength="200" size="26" placeholder="produto.png" required></th>
                </tr>
                <tr align="left">
                    <th><p>Quantidade:</p></th>
                    <th><input type="number" name="PRODUCTQTDE" maxlength="200" size="26" placeholder="3" required></th>
                </tr>
                <tr align="left">
                   <th><p>Manufaturado?</p></th>
                   <th><input type="radio" name="PRODUCTMANFACTURED" value="Sim" checked required>SIM
                   <input type="radio" name="PRODUCTMANFACTURED"  required>NÃO</th>
                </tr>
                <tr>
                    <th colspan="2"><input type="submit" value="Cadastrar">&nbsp;&nbsp;
                                    <input type="reset" value="Limpar"></th>
                </tr>        
            </table>
            </form><br>
            <br><br><br><br><br>
        </div></center>
        <!-- Fim da página --><br>
   </div>         
</body>
</html>
