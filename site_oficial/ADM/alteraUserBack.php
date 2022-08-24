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

    $id_user = $_POST['id_user'];
    $userName = $_POST['USERNAME'];
    $userEmail = $_POST['USEREMAIL'];
    $userFone = $_POST['USERTEL'];
    $userNasc = $_POST['USERBIRTH'];
    $userCpf = $_POST['USERCPF'];
    $userCep = $_POST['USERCEP'];
    $userSex = $_POST['USERSEX'];
    $excluido = 'false';
    $userSenha = $_POST['USERSENHA'];
    $userAdm = 'false';

    $sql = "UPDATE usuario 
             SET nome_user = '$userName', 
                email = '$userEmail',
                senha_user = '$userSenha',
                telefone = '$userFone',
                user_adm = '$userAdm',
                data_nasc = '$userNasc',
                cpf_user = '$userCpf',
                cep_user = '$userCep',
                sexo = '$userSex',
                excluido = '$excluido'
            WHERE id_user = $id_user;";

    $resultado = pg_query($conecta, $sql);
    $linhas = pg_affected_rows($resultado);
    if ($linhas > 0)
    {
        echo "<script type='text/javascript'>alert('Gravação OK !!!')</script>";
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=tabelausuarios.php'>";
    }
    else
        echo "<script type='text/javascript'>alert('Erro na Gravação !!!')</script>";
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=tabelausuarios.php'>";
    // Fechando conexão com o Banco de Dados
    pg_close($conecta);
    ?>
</body>

</html>