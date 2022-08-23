<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perline</title>
</head>
<body>
    <?php
        $sql = "SELECT * FROM usuario WHERE id_user=$id_user;";
        $resultado=pg_query($conecta,$sql);
        $qtde=pg_num_rows($resultado);
        $linha = pg_fetch_array($resultado);
        if ( $qtde == 0 )
        {
            echo '<script language="javascript">';
            echo "alert('Usuário não encontrado!')";
            echo '</script>';	
            echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=admhome.php'>";
            exit;
        }
            pg_close($conecta);
    ?>
</body>
</html>