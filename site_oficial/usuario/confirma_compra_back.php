<?php
    include "../ADM/conection.php"; 
    $id_user=1;
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

    session_start();
    $_SESSION['produtos'] = $resultado_lista;
?>