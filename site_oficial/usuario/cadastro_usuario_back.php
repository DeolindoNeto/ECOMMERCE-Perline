<?php
    include "../utils/conection.php"; 
    
    // Recuperação de dados
    $nome = $_POST['nome_usuario'];
    $email = $_POST['email_usuario'];
    $tel = $_POST['tel_usuario'];
    $dat_nasc = $_POST['dat_nasc_usuario'];
    $cpf = $_POST['cpf_usuario'];
    $cep = $_POST['cep_usuario'];
    $senha = MD5($_POST['senha_usuario']);
    $sexo = $_POST['sexo_usuario'];
    $user_adm = "FALSE";

    // Inserção
    $sql="INSERT INTO usuario (nome_user, email, senha_user, telefone, user_adm, data_nasc, cpf_user, cep_user, sexo)
          VALUES (
            '$nome',
            '$email',
            '$senha',
            '$tel',
            '$user_adm',
            '$dat_nasc',
            '$cpf',
            '$cep',
            '$sexo');";
    
    // Execução
    $resultado=pg_query($conecta,$sql);
    $linhas=pg_affected_rows($resultado);

    if ($linhas > 0)
    {
        echo "<script type='text/javascript'>alert('Usuário cadastrado!!')</script>";
        header("Location: ./login.html");
    }   
    else
    {
        echo '<script language="javascript">';
        echo "alert('Erro na gravação do usuario!')";
        echo '</script>';	
    }

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);
?>