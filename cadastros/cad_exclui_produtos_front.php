<link rel="stylesheet" href="../css/cabecalho.css">
<iframe src="../utils/cabecalho.html" title="cabecalho" frameBorder="0" 
        width="100%" scrolling="no" allowfullscreen>
</iframe>

<?php
       $cod_produto = $_GET["cod_produto"];
       include "cad_getinfo_produto_back.php"; 
?>

<!-- Formulário (após as informações serem carregadas) -->
<form action="cad_exclui_produtos_back.php" method="post">
    <h1>Confirmação: Exclusão de Produtos</h1>
    Código do produto
    <input type="text" name="cod_produto" 
           value="<?php echo $linha['cod_produto']; ?>" 
           readonly>
    <br><br>Descrição
    <input type="text" name="descricao" 
           value="<?php echo $linha['descricao']; ?>" 
           readonly>
    <br><br>Quantidade
    <input type="text" name="qtde_" 
           value="<?php echo $linha['qtde']; ?>" 
           readonly>
    <br><br>Preço
    <input type="text" name="preco" 
           value="<?php echo $linha['preco']; ?>" 
           readonly>
    <br><br>Código do fornecedor
    <input type="text" name="cod_fornecedor" 
           value="<?php echo $linha['cod_fornecedor']; ?>" 
           readonly>

    <br><br>
    <input type="submit" value="Confirma exclusão">
    <input type="button" value="Editar" onclick="location.href='cad_altera_produtos_front.php?cod_produto=<?php echo $cod_produto ?>';">
    <input type="button" value="Voltar" onclick="location.href='cad_pesq_produtos_front.php';">
</form>