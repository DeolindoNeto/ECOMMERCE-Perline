<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perline</title>
</head>
<body>
    <?php
        include "./conection.php";

        $userName = $_POST['USERNAME'];
        $userEmail = $_POST['USEREMAIL'];
        $userFone = $_POST['USERFONE'];
        $userNasc = $_POST['USERNASC'];
        $userCpf = $_POST['USERCPF'];
        $userCep = $_POST['USERCEP'];
        $userSex = $_POST['USERSEX'];
        $excluido = 'false';
        $userSenha1 = $_POST['USERSENHA'];
        $userSenha2 = $_POST['USERSENHA2'];
        $userSenha;
        $userAdm = 'false';

        if($userSenha1 != $userSenha2)
        {
            echo "<script type='text/javascript'>alert('As senhas não coincidem !!!')</script>";
            return;
        }

        $sql = "insert into usuario values (nextval('usuario_id_user_seq'::regclass), '$userName', '$userEmail', '$userSenha',
                '$userFone', '$userAdm', '$userNasc', '$userCpf', '$userCep', '$userSex', '$excluido')";


    $resultado = pg_query($conecta, $sql);

    $linhas = pg_affected_rows($resultado);
    if ($linhas > 0)
    {
        echo "<br>Usuário cadastrado!!!<br><br>";
        echo "<a href='./admhome.php'>Voltar Para o Menu de Desenvolvimento</a>&nbsp;";  
    }    
    else
    {
        echo "<br>Erro no cadastro!!!<br><br>";
        echo "<a href='./admhome.php'>Voltar Para o Menu de Desenvolvimento</a>&nbsp;";
    }  
    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);
    ?>
</body>
</html>