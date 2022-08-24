<?php
include "./conection.php";
$id_produto = $_GET['id_produto'];
/* a variável $cod_produto deve já ter sido atribuída na página pai, antes do include
       para esse arquivo */
$sql = "SELECT * FROM produto WHERE id_produto = $id_produto;";

$resultado = pg_query($conecta, $sql);
$qtde = pg_num_rows($resultado);

if ($qtde == 0) {
    echo '<script language="javascript">';
    echo "alert('Produto não encontrado!')";
    echo '</script>';
    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=tabelaprodutos.php'>";
    exit;
}

$linha = pg_fetch_array($resultado);

// Fecha a conexão com o PostgreSQL
pg_close($conecta);
