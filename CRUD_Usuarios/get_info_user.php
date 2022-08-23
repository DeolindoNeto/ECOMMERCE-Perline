    <?php
    include "./conection.php";
    $id_user = $_GET['id_user'];
    $sql = "SELECT * FROM usuario WHERE id_user=$id_user;";

    $resultado = pg_query($conecta, $sql);
    $qtde = pg_num_rows($resultado);

    if ($qtde == 0) {
        echo '<script language="javascript">';
        echo "alert('Usuário não encontrado!')";
        echo '</script>';
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=tabelausuarios.php'>";
        exit;
    }
    $linha = pg_fetch_array($resultado);

    pg_close($conecta);
    ?>