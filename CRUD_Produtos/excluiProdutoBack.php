<?php
    include "./conection.php";
    $id_user = $_POST['id_produto'];

    // Padrão para data no servidor do kinghost está americano (se atentar!!)
    $data = date('m/d/Y'); //'Y' (maiúsculo) para ano com 4 dígitos
    //$data=date('d/m/Y');

    $sql = "update produto
                set excluido = 'true', data_exclusao = '$data' 
            WHERE id_produto = $id_produto;";
    
    $resultado = pg_query($conecta, $sql);
    $qtde = pg_affected_rows($resultado);

    if ($qtde > 0) {
        echo "<script type='text/javascript'>alert('Exclusão OK !!!')</script>";
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=tabelausuarios.php'>";
    } else
        echo "<script type='text/javascript'>alert('Erro na exclusão !!!')</script>";
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=tabelausuarios.php'>";
    ?>
