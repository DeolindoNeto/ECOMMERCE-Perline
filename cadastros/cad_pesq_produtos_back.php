<?php
    // Faz a conexão bonitona 🐶
    include "../utils/conexao.php"; 

    // Cria o script bonitão 🧀
    $sql="SELECT * FROM produtoscrud WHERE excluido='n' ORDER BY cod_produto;";
    
    // Executa o script bonitão no banco bonitão
    $resultado= pg_query($conecta, $sql);

    // Obter qtde linhas (SELECT)
    $qtde=pg_num_rows($resultado);

    $resultado_lista = null;

    if ($qtde > 0)
    {
        // coloca os dados em uma variável
        $resultado_lista=pg_fetch_all($resultado);
    }
 
    pg_close($conecta);
?>