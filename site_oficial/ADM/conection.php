<?php

    $conecta = pg_connect("host=pgsql.projetoscti.com.br
    port=5432
    dbname=projetoscti13
    user=projetoscti13
    password=0812152830");
    
    if (!$conecta) {
        echo '<script language="javascript">';
        echo "alert('Não foi possível estabelecer conexão com o banco de dados!')";
        echo '</script>';
        exit;
    }
?>