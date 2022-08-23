<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Formulário de Cadastro de Produtos - Tabela Produtos CRUD</title>
</head>
<body>
    <link rel="stylesheet" href="../css/cabecalho.css">
    <iframe src="../utils/cabecalho.html" title="cabecalho" frameBorder="0" 
            width="100%" scrolling="no" allowfullscreen>
    </iframe>

    <h1>Cadastro de Produtos</h1>

    <form action="cad_novo_produtos_back.php" method="post">
        <label>
            <strong>Descrição:</strong><br />    
            <input type="text" name="descricao" /><br />
            <br />
        </label>
        <label>
            <strong>Quantidade:</strong><br />
            <input type="text" name="qtde" /><br />
            <br />
        </label>
        <label>
            <strong>Preço:</strong><br />
            <input type="text" name="preco"  /><br />
            <br />
        </label>
        <label>
            <strong>Código do Fornecedor:</strong><br />
            <input type="text" name="cod_fornecedor" /><br />
            <br />
        </label>
        <input type="submit" name="button" id="button" value="Enviar" />
        <a href='cad_pesq_produtos_front.php'>Voltar</a><br><br>
    </form> 
</body>
</html>