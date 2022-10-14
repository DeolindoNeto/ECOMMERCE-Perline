<?php
    include "../utils/conection.php";
    
    $compraFinalizada = FALSE;
    $qtdeVendida = 0;
    $id_user=1;
    
    $sql="SELECT * FROM produto WHERE id_produto=14";
    
    $resultado= pg_query($conecta, $sql);
    $qtde=pg_num_rows($resultado);

    $resultado_lista = null;

    if ($qtde > 0)
    {
        $resultado_lista=pg_fetch_all($resultado);
    } 

    pg_close($conecta);
    
    function validarProdutos($conecta, $resultado_lista)
    {
        foreach($resultado_lista as $linha)
        {
            $sql = "SELECT quantidade FROM produto WHERE id_produto = ".$linha['id_produto']. ";";
            $res = pg_query($conecta, $sql);

            $resulta = pg_fetch_array($res);

            if($linha['qtde'] > $resulta['quantidade'] || $resulta['quantidade'] == 0)
            {
                echo "<script type='text/javascript'>alert('Desculpe, mas não temos este item em estoque')</script>";
                echo "<script type='text/javascript'>alert('Adicionamos a quantidade em estoque no seu carrinho xD')</script>";

                $qtdeEstoque = $resulta['quantidade'];

                $sqlCarrinho = "UPDATE carrinho SET qtde = $qtdeEstoque WHERE id_produto = ".$linha['id_produto'].";";

                pg_query($conecta, $sqlCarrinho);
                echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=selecao_produto_front.php'>";
                exit;
            }
            return false;
        }
        return true;
    }

    function atualizarEstoque($conecta, $id_produto, $qtdeVendida)
    {
        $sql = "UPDATE produto SET quantidade = quantidade-2 WHERE id_produto = $id_produto;";

        pg_query($conecta, $sql);
    }

    validarProdutos($conecta, $resultado_lista);

    $sql = "INSERT INTO venda (id_user, data_hora_venda, observacoes) VALUES ($id_user, current_timestamp, 'Venda realizada');";
    $res = pg_query($conecta, $sql);
    $qtdLinhas = pg_affected_rows($res);

    if ($qtdLinhas == 0)
    echo "<h1>Erro ao finalizar a compra!!<h1>";

    foreach($resultado_lista as $linha)
    {
        $preco = $linha['preco'];
        $qtde = $linha['qtde'];
        $id_produto = $Linha['id_produto'];
        $valortotal += $linha['subtotal'];

        $sql = "INSERT INTO itemvenda (id_venda, id_produto, qtde, valor_unit, valor_total) VALUES (currval('venda_id_venda_seq'), $id_produto);";
        $res = pg_query($conecta, $sql);
        atualizarEstoque($conecta, $id_produto, $qtde);
    }
    // limpa carrinho

    $sql="DELETE FROM carrinho WHERE id_user = $id_user";
    pg_query($conecta, $sql);

    pg_close($conecta);

?>