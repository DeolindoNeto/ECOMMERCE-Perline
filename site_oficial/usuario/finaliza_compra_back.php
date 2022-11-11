<?php
    include "../utils/conection.php";
    session_start();
    $id_user = $_SESSION['usuariologado']['id_user'];
    $compraFinalizada = FALSE;
    $cont = 0;
    $total = 0;

   function validarProdutos($resultado_lista)
    {
         foreach($resultado_lista as $linha)
         {
             $id_produto=$linha["id_produto"];
             $sqlPegaProd="SELECT * FROM produto WHERE id_produto = $id_produto;";
         }   

        return true;
    }

    function atualizarEstoque($conecta, $id_produto, $qtdVendida)
    {
        $sql =" UPDATE produto
        set quantidade=quantidade-$qtdVendida where id_produto=$id_produto;";
        $res=pg_query($conecta, $sql);
        $qtdLinhas = pg_affected_rows($res);

        if ($qtdLinhas == 0)
        {
            echo "<div class='center'>
                    <img src='../img/erro_estoque.png' width=500px>
                </div>";
        }
    } 
    session_start();
    $resultado_lista = $_SESSION['produtos'];
    
    $id_produto = $_SESSION['carrinho'];
        
    validarProdutos($resultado_lista); 

    foreach($resultado_lista as $linha)
    { 
        $preco = $linha['preco_venda'];
        $qtde = $linha['qtde'];
        $id_produto = $linha['id_produto'];
        $estoque = $linha['estoque'];
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
        $sql = " INSERT INTO venda (id_venda, id_user, data_hora_venda, observacoes, excluido) VALUES (nextval('venda_id_venda_seq'::regclass), $id_user, current_timestamp,'Venda realizada', false);";
        $res = pg_query($conecta, $sql);
        $qtdLinhas = pg_affected_rows($res);
        if ($qtdLinhas == 0)
        {
            echo '<script language="javascript">';
            echo "alert('Erro ao finalizar compra, desculpe-nos!!')";
            echo '</script>';	
        }
        else
        {
            header ('Location: selecao_produto_front.php');
        }
        foreach($resultado_lista as $linha)
        { 
            $preco = $linha['preco'];
            $qtdVendida = $linha['qtde'];
            $id_produto = $linha['id_produto'];


            $sql = " INSERT INTO itemvenda (id_venda, id_produto, qtde, valor_unit) VALUES (CURRVAL('venda_id_venda_seq'),".$id_produto.",".$qtdVendida.",".$preco." );";
            $res = pg_query($conecta, $sql);
            atualizarEstoque($conecta, $id_produto, $qtdVendida);
        }  
        header ('Location: finaliza_compra_front.php');
    }
    else
    {
            $_SESSION['erro_finalizacao'] = 1;
            header ('Location: selecao_produto_front.php');
            return;
    }
    
    // Limpar carrinho
    $sql=" DELETE FROM carrinho
            where id_user = $id_user";

    pg_query($conecta,$sql);

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);
?>