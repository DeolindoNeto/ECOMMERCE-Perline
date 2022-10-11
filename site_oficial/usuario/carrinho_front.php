<!DOCTYPE html>
<link rel="stylesheet" href="../css/menuLateral.css">
<body bgcolor="#47d8b7"></body>
<?php
     $acao = $_GET['acao'] ?? '';
     $id_produto = $_GET['id_produto'] ?? 0;
     $id_user = 1; // Depois precisamos alterar para pegar da $_SESSION
 
     if ($acao=='up') {
         if (is_array($_POST['prod']))
             $prods = $_POST['prod'];
         else
             $prods = array();
     }
 
     include "carrinho_back.php";
 ?>
 
 <div class='table'>
     <div class='row'>
     <div class='cell cellPreco cellHeader'>
             Nome
         </div>
         <div class='cell cellPreco cellHeader'>
             Preço
         </div>
         <div class='cell cellPreco cellHeader'>
             Qtde.
         </div>
         <div class='cell cellPreco cellHeader'>
             Subtotal
         </div>
         <div class='cell cellAcoes'>
             &nbsp;
         </div>
     </div>
 
     <form action="?acao=up" method="post">
     
     <?php
         $total = 0.0;
 
         // Criar linhas com os dados dos produtos
         foreach ($resultado_lista as $linha)
         { 
             $id_produto = $linha['id_produto'];
             $total += floatval($linha['subtotal']);
     ?>        
            <div class='row'>
                 <div class='cell cellNome'>
                     <?php echo $linha['nome']; ?>
                 </div>
                 <div class='cell cellPreco'>
                     <?php echo $linha['preco']; ?>
                 </div>
                 <div class='cell cellPreco'>
                     <input type="text" size="3" name="prod[<?php echo $id_produto; ?>]"
                         value="<?php echo $linha['qtde']; ?>" />
                 </div>
                 <div class='cell cellPreco'>
                     <?php echo $linha['subtotal']; ?>
                 </div>
                 <div class='cell cellAcoes'>
                     <a href='carrinho_back.php?acao=del&id_produto=<?php echo $id_produto; ?>'target="_blank">Excluir</a>
                 </div>
             </div>
     <?php 
         }  
         echo "<h3>Total da compra: R$ ".number_format($total, 2, ',', '.');".</h3>";
     ?>
    <input type="submit" value="Atualizar Carrinho" />&nbsp;&nbsp;
	<a href="./selecao_produto_front.php" target="_blank">Continuar Comprando</a>&nbsp;&nbsp;
	<a href="finaliza_compra_front.php" target="_blank">Finalizar Compra</a>
     <br><br>
     </form>
?>