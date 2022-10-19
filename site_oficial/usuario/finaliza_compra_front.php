<!DOCTYPE html>
<link rel="stylesheet" href="../css/menuLateral.css">
<div class="mae">
<input type="checkbox" id="check">
<?php
    //session_start();
    $id_user = 1; // Depois precisamos alterar para pegar da $_SESSION
    include "./finaliza_compra_back.php";
?>

<div class="w-70" style="padding-left: 1em; padding-right: 1em; margin-left: auto; margin-right: auto" id="status-pedido-c">

<p style="font-size: 3.25rem; color: rgba(0,0,0,.7)">Pedido Confirmado</p>

<div id="bloco-confirma">

<span style="font-size: 2rem; color: #137752; font-weight: 600">Seu pedido foi realizado com sucesso.</span>

<p><span style="color: #137752; font-size: 2rem">Em breve você receberá um e-mail no endereço&nbsp;<strong id="email"></strong>&nbsp; com todos os detalhes do pedido.</span></p><p id="status-pedido"> Aguardamos a confirmação do pagamento</p></div>

</div>

<div class="w-70" style="padding-left: 1em; padding-right: 1em; margin-left: auto; margin-right: auto" id="status-pedido-c">

<div style="border-radius: .5rem; background: #fff; padding: 2rem; border: 1px solid #000;"><p id="confirma-info"></p>

</div>

</div>

<a href="./selecao_produto_front.php">Voltar</a>
</div>