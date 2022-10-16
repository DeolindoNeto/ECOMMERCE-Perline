<link rel="stylesheet" href="../css/menuLateral.css">
<div class="mae">
<input type="checkbox" id="check">
<?php
    //session_start();
    $id_user = 1; // Depois precisamos alterar para pegar da $_SESSION
    include "./finaliza_compra_back.php";

    echo "<h1>Compra Finalizada com Sucesso!!!</h1>";
?>

<a href="./selecao_produto_front.php">Voltar</a>
</div>