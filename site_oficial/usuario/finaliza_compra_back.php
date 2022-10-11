<?php
    include "../ADM/conection.php"; 

    $compraFinalizada = FALSE;

    function validarProdutos($resultado_lista)
    {
        // ESSE CODIGO ESTÁ INCOMPLETO!!!

        // Realizar as validações com os produtos aqui
        foreach($resultado_lista as $linha)
        {
            //$sql = "SELECT QTDE FROM PROD.... ";
            // $res = pg_query($conecta,$sql);
            // if ///
            //   return false;
        }

        return true;
    }

    function atualizarEstoque($id_produto, $qtdeVendida)
    {
        // ESSE CODIGO ESTÁ INCOMPLETO!!!

        //$sql = "UPDATE ..."
        //$res = pg_query($conecta,$sql);
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
            where id_usuario = $idusuario";

    pg_query($conecta,$sql);

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);


?>