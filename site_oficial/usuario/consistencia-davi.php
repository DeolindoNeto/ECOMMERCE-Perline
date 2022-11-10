<?php
    include "../../utils/conexao.php"; 

    $compraFinalizada = FALSE;
    $cont = 0;
    $total = 0;

    function validarProdutos($resultado_lista)
    {
        foreach($resultado_lista as $linha)
        {
            $sql = "SELECT qtde FROM produto";
            // $res = pg_query($conecta,$sql);
            // if ///
            //   return false;
        }

        return true;
    }

    function atualizarEstoque($conecta, $id_produto, $qtdeVendida)
    {
        $sql = "UPDATE produto SET estoque = estoque - $qtdeVendida WHERE id_produto = $id_produto;";
        $res = pg_query($conecta, $sql);
        $qtdLinhas = pg_affected_rows($res);

        if ($qtdLinhas == 0)
        {
            echo "<div class='center'>
                    <img src='../medias/erro_estoque.png' width=500px>
                </div>";
        }
    }

    session_start();
    $resultado_lista = $_SESSION['produto'];

    // (ainda precisa programar)
    validarProdutos($resultado_lista);

    foreach($resultado_lista as $linha)
    { 
        $preco = $linha['preco_venda'];
        $qtde = $linha['qtde'];
        $id_produto = $linha['id_produto'];
        $estoque = $linha['quantidade'];
        $subtotal = $preco * $qtde;
        $total = $subtotal + $total;
        
        if ($qtde > $estoque)
        {
           $cont++;
           break;
        }
    }

    if ($cont == 0)
    {
        $sql = "INSERT INTO venda (id_venda, id_usuario, dthr_venda, total) VALUES (DEFAULT, $id_usuario, NOW(), $total);";
        $res = pg_query($conecta, $sql);
        $qtdLinhas = pg_affected_rows($res);
        if ($qtdLinhas == 0)
        {
            echo "<div class='center'>
            <img src='../medias/erro_compra.png' width=500px>
            </div>";
        }
        else
        {
             header ('Location: fim_venda.php');
             include "../../email/enviaking.php";
        }
        foreach ($resultado_lista as $linha)
        {
            $preco = $linha['preco_venda'];
            $qtde = $linha['qtde'];
            $id_produto = $linha['id_produto'];
            $estoque = $linha['estoque'];
            $subtotal = $qtde * $preco;
            
            $sql = "INSERT INTO item_venda (id_venda, id_produto, qtde, valor_unitario, valor_total) VALUES (CURRVAL('venda_id_venda_seq'),".$id_produto.",".$qtde.",".$preco.",".$subtotal.");";
            $res = pg_query($conecta, $sql);
            atualizarEstoque($conecta, $id_produto, $qtde);
        }
    }
    else 
    {
        echo "<div class='center'>
        <h1>Não temos esta quantidade no estoque</h1>
        </div>";  
    }
   
    // Limpar carrinho
    $sql=" DELETE FROM carrinho
            where id_usuario = $id_usuario";
    $cont = 0;

    pg_query($conecta,$sql);

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);

?>