<?php
    include "./conexao.php"; 

    $sql="SELECT * FROM Venda WHERE excluido='false' ORDER BY id_venda;";
    
    $resultado= pg_query($conecta, $sql);
    $qtde=pg_num_rows($resultado);

    $resultado_lista = null;

    if ($qtde > 0)
    {
        $resultado_lista=pg_fetch_all($resultado);
    } 
    pg_close($conecta);
?>