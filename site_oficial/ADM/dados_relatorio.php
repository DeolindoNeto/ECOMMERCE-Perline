<?php
	require "conexao.php";

	$sql = "select p.id_produto,
                  p.descricao,
                  sum(iv.qtde) as qtdevendida
             from venda v
            inner join itemvenda iv
               on v.id_venda = iv.id_venda
            inner join produto p
               on p.id_produto = iv.id_produto 
            group by p.id_produto,
                  p.descricao
            order by qtdevendida desc ";

	$res = pg_query($conecta, $sql);
	$qtde=pg_num_rows($res);	 
?>