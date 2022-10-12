<?php
    include "../ADM/conection.php"; 

    $compraFinalizada = FALSE;
    $id_user=1;

    $id_produto = $_GET['id_produto'];

    /*function validarProdutos($resultado_lista)
    {
        // ESSE CODIGO ESTÁ INCOMPLETO!!!

        // Realizar as validações com os produtos aqui
        foreach($resultado_lista as $linha)
        {
            $sql = "SELECT quantidade 
                    FROM produto 
                    WHERE id_produto=$id_produto";
            $res = pg_query($conecta,$sql);
        }

        return true;
    }*/

    function getQtdeProdutoCarrinho($conecta, $id_user, $id_produto) {
        /* seleciona o carrinho */
        $sql="SELECT qtde
                FROM carrinho
               WHERE id_user = $id_user
                 AND id_produto = $id_produto";

        $resultado=pg_query($conecta,$sql);
        $qtde=pg_num_rows($resultado);

        if ( $qtde == 0 )
            return 0;
        
        // retornará a quantidade atual do item já existente no carrinho
        $qtdeVendida = pg_fetch_array($resultado);
        return intval($qtdeVendida['qtde']);
        
    function atualizarEstoque($id_produto, $qtdeVendida)
    {
        $sql="UPDATE carrinho
                     set quantidade = ".($qtdeVendida).
                  "where id_produto = $id_produto
                     and id_user = $id_user";
        $res = pg_query($conecta,$sql);
    }

    session_start();
    $resultado_lista = $_SESSION['produtos'];

    // (ainda precisa programar)
    validarProdutos($resultado_lista);

    $sql = "INSERT INTO venda (id_venda, id_user, data_hora_venda, excluido) VALUES (DEFAULT, $id_user, NOW(),'f');";
    $res = pg_query($conecta, $sql);
    $qtdLinhas = pg_affected_rows($res);

    if ($qtdLinhas == 0)
        echo "<h1>Erro ao Finalizar a Compra!!!</h1>";

    foreach($resultado_lista as $linha)
    { 
        $preco = $linha['preco'];
        $qtde = $linha['qtde'];
        $id_produto = $linha['id_produto'];

        $sql = "INSERT INTO itemvenda (id_venda, id_produto, qtde, preco) VALUES (CURRVAL('venda_codvenda_seq'),".$idproduto.",".$qtde.",".$preco.");";
        $res = pg_query($conecta, $sql);

        // Atualizar qtde estoque 
        // (ainda precisa programar)
        atualizarEstoque($id_produto, $qtde);
    }  

    // Limpar carrinho
    $sql=" DELETE FROM carrinho
            where id_user = $id_user";

    pg_query($conecta,$sql);

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);


?>