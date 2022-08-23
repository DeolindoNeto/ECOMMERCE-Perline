<link rel="stylesheet" href="../css/cabecalho.css">
<iframe src="../utils/cabecalho.html" title="cabecalho" frameBorder="0" 
        width="100%" scrolling="no" allowfullscreen>
</iframe>

<!-- Recuperando as informações do produto -->
<?php
       $cod_produto = $_GET["cod_produto"];
       include "cad_getinfo_produto_back.php"; 
?>

<!-- Formulário (após as informações serem carregadas) -->
<form action="cad_altera_produtos_back.php" method="post">
    <h1>Alteração de Produtos</h1>
    Código do produto
    <input type="text" name="cod_produto" 
           value="<?php echo $linha['cod_produto']; ?>" 
           readonly>
    <br><br>Descrição
    <input type="text" name="descricao" 
           value="<?php echo $linha['descricao']; ?>" >
    <br><br>Quantidade
    <input type="text" name="qtde_" 
           value="<?php echo $linha['qtde']; ?>" >
    <br><br>Preço
    <input type="text" name="preco" 
           value="<?php echo $linha['preco']; ?>" >
    <br><br>Código do fornecedor
    <input type="text" name="cod_fornecedor" 
           value="<?php echo $linha['cod_fornecedor']; ?>" >

     <br><br>
    <input type="submit" value="Gravar">
    <input type="reset" value="Voltar" onclick="history.back()">
</form>