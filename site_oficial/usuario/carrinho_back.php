<?php
    include "../ADM/conection.php"; 
    $id_user=1;
    $id_produto=$_GET['id_produto'];
    $acao=$_GET['acao'];
    // Verifica se o produto já está no carrinho
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
        $produto_carrinho = pg_fetch_array($resultado);
        return intval($produto_carrinho['qtde']);
    }

    function addCarrinho($conecta, $id_user, $id_produto) {

        $qtdeProduto = getQtdeProdutoCarrinho($conecta, $id_user, $id_produto);

        // Se o produto ainda não existe no carrinho
        if ($qtdeProduto == 0) {
            // Insere o produto
            $sql="INSERT INTO carrinho 
                (id_produto, id_user, qtde)   VALUES 
                ($id_produto, $id_user, 1);";
        }
        else {
            $sql="UPDATE carrinho
                     set quantidade = ".($qtdeProduto + 1).
                  "where id_produto = $id_produto
                     and id_user = $id_user";
        }

        // Execução
        pg_query($conecta,$sql);
    }

    function removeCarrinho($conecta, $id_user, $id_produto) {
        $sql="DELETE FROM carrinho
               where id_produto = $id_produto
                 and id_user = $id_user";
        // Execução
        pg_query($conecta,$sql);
    }

    function updateCarrinho($conecta, $id_user, $prods) {

        //var_dump($prods);

        foreach($prods as $id_produto => $qtde){
            $sql="UPDATE carrinho
                    set qtde = $qtde
                where id_produto = $id_produto
                    and id_user = $id_user";
            
            pg_query($conecta,$sql);
        }
    }
    

    // Início do processamento

    if (!empty($acao))
    {
        if ($acao == 'add') {
            addCarrinho($conecta, $id_user, $id_produto);
        }
        else if($acao == 'del'){
            removeCarrinho($conecta, $id_user, $id_produto);
        }
        else if($acao == 'up'){
            updateCarrinho($conecta, $id_user, $prods);
        }

        // Modifica a url para remover qualquer uma das ações: add, del ou up, evita que a ação seja
        // processada novamente caso a página seja recarregada
        header("location:carrinho_front.php");
        return;
    }

    /* seleciona todos os itens do carrinho do usuário */
    $sql="SELECT c.*,
                 p.nome,
                 p.preco,
                 c.qtde * p.preco as subtotal,
                 p.quantidade as estoque
            FROM carrinho c
           inner join produto p
              on c.id_produto = p.id_produto
           WHERE c.id_user = $id_user"; 

    $resultado= pg_query($conecta, $sql);
    $qtde=pg_num_rows($resultado);

    $resultado_lista = null;

    if ($qtde > 0)
    {
        $resultado_lista=pg_fetch_all($resultado);
    }

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);
?>