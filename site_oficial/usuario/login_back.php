<?php
    session_start();
    // script foi chamado de index.php
    include "../ADM/conection.php"; 

    $email = $_POST["email"];
    $senhacripto = MD5($_POST["senha"]);
    //$usuario = ['nome_user'];
    
    //$senha = md5($senha); //ou se a senha estiver oculta
    $sql = "select * from usuario where email = '$email' and senha_user = '$senhacripto' ";
    $res = pg_query($conecta, $sql);
    if (pg_num_rows($res) > 0)
    {
        $linha = pg_fetch_array($res);

        $_SESSION["usuariologado"] = $linha;
        $_SESSION["isadm"] = $linha['adm'];
        $nome = $_SESSION["usuariologado"]["nome_user"];
        echo '<script language="javascript">';
        echo "alert('Usuário logado, bem vindo!!')";
        echo '</script>';
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=./index.php'>";
    }
    else
    {
        echo '<script language="javascript">';
        echo "alert('Usuário ou senha inválidos!')";
        echo '</script>';	

        //echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=login_front.php'>";
    }
?>