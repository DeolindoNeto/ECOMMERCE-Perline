<?php
    include "../utils/conexao.php"; 

    // Verifica se o produto já está no carrinho
    function getQtdeProdutoCarrinho($conecta, $codusuario, $codproduto) {

        /* seleciona o carrinho */
        $sql="SELECT qtde
                FROM carrinho
               WHERE cod_usuario = $codusuario
                 AND cod_produto = $codproduto";

        $resultado=pg_query($conecta,$sql);
        $qtde=pg_num_rows($resultado);

        if ( $qtde == 0 )
            return 0;
        
        // retornará a quantidade atual do item já existente no carrinho
        $produto_carrinho = pg_fetch_array($resultado);
        return intval($produto_carrinho['qtde']);
    }

    function addCarrinho($conecta, $codusuario, $codproduto) {

        $qtdeProduto = getQtdeProdutoCarrinho($conecta, $codusuario, $codproduto);

        // Se o produto ainda não existe no carrinho
        if ($qtdeProduto == 0) {
            // Insere o produto
            $sql="INSERT INTO carrinho 
                (cod_produto, cod_usuario, qtde)   VALUES 
                ($codproduto, $codusuario, 1);";
        }
        else {
            $sql="UPDATE carrinho
                     set qtde = ".($qtdeProduto + 1).
                  "where cod_produto = $codproduto
                     and cod_usuario = $codusuario";
        }

        // Execução
        pg_query($conecta,$sql);
    }

    function removeCarrinho($conecta, $codusuario, $codproduto) {
        $sql="DELETE FROM carrinho
               where cod_produto = $codproduto
                 and cod_usuario = $codusuario";

        // Execução
        pg_query($conecta,$sql);
    }

    function updateCarrinho($conecta, $codusuario, $prods) {

        //var_dump($prods);

        foreach($prods as $codproduto => $qtd){
            $sql="UPDATE carrinho
                    set qtde = $qtd
                where cod_produto = $codproduto
                    and cod_usuario = $codusuario";
            
            pg_query($conecta,$sql);
        }
    }
    

    // Início do processamento

    if (!empty($acao))
    {
        if ($acao == 'add') {
            addCarrinho($conecta, $codusuario, $codproduto);
        }
        else if($acao == 'del'){
            removeCarrinho($conecta, $codusuario, $codproduto);
        }
        else if($acao == 'up'){
            updateCarrinho($conecta, $codusuario, $prods);
        }

        // Modifica a url para remover qualquer uma das ações: add, del ou up, evita que a ação seja
        // processada novamente caso a página seja recarregada
        header("location:carrinho_front.php");
        return;
    }

    /* seleciona todos os itens do carrinho do usuário */
    $sql="SELECT c.*,
                 p.preco,
                 c.qtde * p.preco as subtotal,
                 p.descricao,
                 p.qtde as estoque
            FROM carrinho c
           inner join produtoscrud p
              on c.cod_produto = p.cod_produto
           WHERE c.cod_usuario = $codusuario
           ORDER BY p.descricao;";

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