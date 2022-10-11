<link rel="stylesheet" href="../css/cabecalho.css">
<link rel="stylesheet" href="../css/carrinho.css">
<iframe src="../utils/cabecalho.html" title="cabecalho" frameBorder="0" 
        width="100%" scrolling="no" allowfullscreen>
</iframe>
<?php
    //session_start();
    $id_user = 1; // Depois precisamos alterar para pegar da $_SESSION
    include "finalizacao_compra_back.php";

    echo "<h1>Compra Finalizada com Sucesso!!!</h1>";
?>

<a href="selecao_produtos_front.php">Voltar</a>