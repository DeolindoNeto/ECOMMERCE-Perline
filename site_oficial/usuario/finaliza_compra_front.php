<link rel="stylesheet" href="../css/menuLateral.css">
<div class="sidebar">
        <center>
            <!--<div class="logo_no_carrinho">
                <h3><span>P E R L I N E</span>&nbsp;<abbr title="Perline"></abbr></h3>
            </div>-->
            <iframe src="http://ftp.projetoscti.com.br/projetoscti21/site_oficial/usuario/carrinho_front.php" width="285" height="675"></iframe>
        </center>
    </div>
<?php
    //session_start();
    $id_user = 1; // Depois precisamos alterar para pegar da $_SESSION
    include "./finaliza_compra_back.php";

    echo "<h1>Compra Finalizada com Sucesso!!!</h1>";
?>

<a href="selecao_produtos_front.php">Voltar</a>