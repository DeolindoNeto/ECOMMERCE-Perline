<?php
    include "../utils/conexao.php"; 
    
    // Recuperação de dados
    $descricao=$_POST['descricao'];
    $qtde=$_POST['qtde'];
    $preco=$_POST['preco'];
    $cod_fornecedor=$_POST['cod_fornecedor'];
    $excluido='n';

    // Inserção
    $sql="INSERT INTO produtoscrud
          (cod_produto, descricao, qtde, preco, cod_fornecedor, excluido)
          VALUES (
            DEFAULT,
            '$descricao', 
            $qtde, 
            $preco,
            $cod_fornecedor,
            '$excluido');";
    
    // Execução
    $resultado=pg_query($conecta,$sql);
    $linhas=pg_affected_rows($resultado);

    if ($linhas > 0)
    {
        echo '<script language="javascript">';
        echo "alert('Produto salvo com sucesso!')";
        echo '</script>';	

        header("Location: cad_novo_produtos_front.php");
    }   
    else
    {
        echo '<script language="javascript">';
        echo "alert('Erro na gravação do produto!')";
        echo '</script>';	
    }

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);
?>  