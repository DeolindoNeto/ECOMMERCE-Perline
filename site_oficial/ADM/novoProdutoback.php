<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perline Produtos</title>
</head>

<body>
    <?php
    include "../utils/conection.php";

    $nomeProd = $_POST['PRODUCTNAME'];
    $precoProd = $_POST['PRODUCTPRICE'];
    $custoProd = $_POST['PRODUCTCOST'];
    $codeVisual = $_POST['PRODUCTCODE'];
    $vendaProd = $_POST['PRODUCTSELLPRICE'];
    $margemLucro = $_POST['PRODUCTMARGIN'];
    $icmsProd = $_POST['PRODUCTICMS'];
    $imgProd = $_POST['PRODUCTIMAGE'];
    $manufaturado = $_POST['PRODUCTMANFACTURED'];
    $dataExclusao = "2000-01-01";
    $excluido = "false";
    $descricao = $_POST['PRODUCTDESCRICAO'];
    $quantidade = $_POST['PRODUCTQTDE'];

    $sql = "insert into produto values (nextval('produto_id_produto_seq'::regclass),'$nomeProd', '$precoProd',
        '$dataExclusao', '$codeVisual', '$custoProd', '$vendaProd', '$margemLucro', '$quantidade',
        '$icmsProd', '$imgProd', '$excluido',  '$manufaturado','$descricao')";
    
    $resultado = pg_query($conecta, $sql);

    $linhas = pg_affected_rows($resultado);
    if ($linhas > 0)
    {
        echo "<br>Produto gravado !!!<br><br>";
        echo "<a href='./admhome.php'>Voltar Para o Menu de Desenvolvimento</a>&nbsp;";
    }
    else
    {
        echo "<br>Erro na gravação do produto !!!<br><br>";
        echo "$sql";
        echo "<a href='./admhome.php'>Voltar Para o Menu de Desenvolvimento</a>&nbsp;";
    }
    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);
    ?>
</body>

</html>