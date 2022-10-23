<?php
    include "../utils/conection.php";
    session_start();
    
    $compraFinalizada = FALSE;
    $id_user = $_SESSION['usuariologado']['id_user'];

   function validarProdutos($conecta, $resultado_lista, $qtdeVendida)
    {
        if($resultado_lista)
        {
         foreach($resultado_lista as $linha)
         {
             $id_produto=$linha["id_produto"];
             $sqlPegaProd="SELECT * FROM produto WHERE id_produto = $id_produto;";
             $res= pg_query($conecta, $sqlPegaProd);

             if($res<=0) 
                return false;

             /* if($linha['quantidade'] < $qtdeVendida){
                echo "<br><br><br><br>aqui"."$estoque";
                echo "<script type='text/javascript'>alert('Desculpe, não temos a quantidade pedida em estoque!!')</script>";
             }
             else if ($linha['quantidade'] >= $qtdeVendida){
                return true;
             }     VALIDAÇÃO DE ESTOQUE E QUANTIDADE EM CARRINHOOOOO*/ 
         }         
        return true;
        } 
    }
    function atualizarEstoque($conecta, $id_produto, $qtdVendida)
    {
           $sql =" UPDATE produto
           set quantidade=quantidade-$qtdVendida
             where id_produto=$id_produto;";
        $res=pg_query($conecta, $sql);
        if($res<=0) 
               return false; 
    } 
    session_start();
    $resultado_lista = $_SESSION['produtos'];
    
    $id_produto = $_SESSION['carrinho'];
    
    foreach($resultado_lista as $linha)
    {
        $qtdeVendida = $linha['qtde'];
        validarProdutos($conecta, $resultado_lista, $qtdeVendida); 
    }

    $sql = " INSERT INTO venda (id_venda, id_user, data_hora_venda, observacoes, excluido) VALUES (nextval('venda_id_venda_seq'::regclass), $id_user, current_timestamp,'Venda realizada', false);";
    $res = pg_query($conecta, $sql);
    $qtdLinhas = pg_affected_rows($res);

    if ($qtdLinhas == 0)
        echo "<h1>Erro ao Finalizar a Compra!!!</h1>";

        foreach($resultado_lista as $linha)
        { 
            $preco = $linha['preco'];
            $qtdVendida = $linha['qtde'];
            $id_produto = $linha['id_produto'];
            $sql = " INSERT INTO itemvenda (id_venda, id_produto, qtde, valor_unit) VALUES (CURRVAL('venda_id_venda_seq'),".$id_produto.",".$qtdVendida.",".$preco." );";
            $res = pg_query($conecta, $sql);
    
            atualizarEstoque($conecta, $id_produto, $qtdVendida);
        }  
    // Limpar carrinho
    $sql=" DELETE FROM carrinho
            where id_user = $id_user";

    pg_query($conecta,$sql);

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);
?>