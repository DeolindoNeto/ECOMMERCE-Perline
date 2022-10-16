<?php
    session_start();
    // script foi chamado de index.php
    include "../ADM/conection.php"; 

    $usuario = $_POST["usuario"];
    $senhacripto = MD5($_POST["senha"]);
    
    //$senha = md5($senha); //ou se a senha estiver oculta
    $sql = "select * from usuario where nome_user = '$usuario' and senha_user = '$senhacripto' ";
    $res = pg_query($conecta, $sql);
    if (pg_num_rows($res) > 0)
    {
        $linha = pg_fetch_array($res);

        $_SESSION["usuariologado"] = $linha;
        $_SESSION["isadm"] = $linha['adm'];
        echo "<script type='text/javascript'>alert('Usuário logado, bem-vindo $usuario !!!')</script>";
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