<?php
    include "../utils/conection.php"; 
   
    $compraFinalizada = FALSE;

   function validarProdutos($conecta, $resultado_lista)
    {
        // ESSE CODIGO ESTÁ INCOMPLETO!!!

        // Realizar as validações com os produtos aqui
       /*foreach($prods as $id_produto => $qtd){ 
            $sql="UPDATE carrinho
                    set qtde = $qtd
                where id_produto = $id_produto
                    and id_usuario = $id_usuario";*/
       if($resultado_lista)
       {
        foreach($resultado_lista as $linha)
        {
            $id_produto=$linha["id_produto"];
            $sql="SELECT * FROM produto WHERE id_produto = $id_produto;";
         //  echo $sql;
            $res= pg_query($conecta,$sql); 
           if($res<=0) 
               return false;   
                      
            //$sql = "SELECT QTDE FROM PROD.... ";
            // $res = pg_query($conecta,$sql);
            // if ///
            //   return false;
        } 
       }
       

 
        return true;
    } 
   
    function atualizarEstoque($conecta, $id_produto, $qtdVendida)
    {
        // ESSE CODIGO ESTÁ INCOMPLETO!!
       
       
           $sql =" UPDATE produto
           set quantidade=quantidade- $qtdVendida
             where id_produto=$id_produto;";
            // echo $sql;
            $res=pg_query($conecta, $sql); 
            
        //$sql = "UPDATE ..."
        //$res = pg_query($conecta,$sql); 
    } 
    session_start();
    $resultado_lista = $_SESSION['produtos'];

  //  $idprod = $_SESSION['carrinho'];
    
    // (ainda precisa programar)
   validarProdutos($conecta, $resultado_lista); 
    $sql = " INSERT INTO venda (id_venda,id_user, datavenda, excluido) VALUES (DEFAULT, $id_user, NOW(),'f');";
    $res = pg_query($conecta, $sql);
    $qtdLinhas = pg_affected_rows($res);

    if ($qtdLinhas == 0)
        echo "<h1>Erro ao Finalizar a Compra!!!</h1>";
 
    foreach($resultado_lista as $linha)
    { 
        $preco = $linha['preco'];
        $qtdVendida = $linha['qtde'];//AQUIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII
        $id_produto = $linha['id_produto'];
        $sql = " INSERT INTO itemvenda (id_itemvenda, id_produto, qtde, valor) VALUES (DEFAULT,".$id_produto.",".$qtdVendida.",".$preco." );";
       // echo $sql; 
        $res = pg_query($conecta, $sql);

        // Atualizar qtde estoque 
        // (ainda precisa programar)
        atualizarEstoque($conecta, $id_produto, $qtdVendida);
    }  
 
    // Limpar carrinho
    $sql=" DELETE FROM carrinho
            where id_user = $id_user";

    pg_query($conecta,$sql);

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);


?>

