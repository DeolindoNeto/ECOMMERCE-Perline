<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perline Art</title>
</head>

<body>
    <?php
    include "./conection.php";
    $id_produto = $_POST['id_produto'];
    $quantidade = $_POST['PRODUCTQTDE'];
    $nomeProd = $_POST['PRODUCTNAME'];
    $precoProd = $_POST['PRODUCTPRICE'];
    $custoProd = $_POST['PRODUCTCOST'];
    $codeVisual = $_POST['PRODUCTCODE'];
    $vendaProd = $_POST['PRODUCTSELLPRICE'];
    $margemLucro = $_POST['PRODUCTMARGIN'];
    $icmsProd = $_POST['PRODUCTICMS'];
    $imgProd = $_POST['PRODUCTIMAGE'];
    $manufaturado = $_POST['PRODUCTMANFACTURED'];
    $dataExclusao = "2022-08-19 12:01:53.096966-03";
    $excluido = "false";
    
    $sql = "UPDATE produto
             SET  nome = '$nomeProd',
                 preco = '$precoProd', 
                 data_exclusao = '$dataExclusao',
                 codigo_visual = '$codeVisual',
                 custo = '$custoProd',
                 preco_venda = '$vendaProd',
                 margem_lucro = '$margemLucro',
                icms = '$icmsProd',
                campo_imagem = '$imgProd',
                excluido = '$excluido',
                manufaturado = '$manufaturado',
                 quantidade = $quantidade
           WHERE id_produto = $id_produto;";

    $resultado = pg_query($conecta, $sql);
    $linhas = pg_affected_rows($resultado);

    if ($linhas > 0)
        echo "<script type='text/javascript'>alert('Gravação OK !!!')</script>";
    else
        echo "<script type='text/javascript'>alert('Erro na Gravação !!!')</script>";

    // Fechando conexão com o Banco de Dados
    pg_close($conecta);
    ?>
</body>

</html>