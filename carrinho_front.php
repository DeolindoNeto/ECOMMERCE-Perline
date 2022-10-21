<!DOCTYPE html>
<html lang="pt-br">

<?php
     session_start();
     $acao = $_GET['acao'] ?? '';
     $id_produto = $_GET['id_produto'] ?? 0;
     $id_user = $_SESSION['usuariologado']['id_user'];
 
     if ($acao=='up') {
         if (is_array($_POST['prod']))
             $prods = $_POST['prod'];
         else
             $prods = array();
     }
 
     include "carrinho_back.php";
 ?>

<head>
    <meta charset="UTF-8">
    <title>C A R R I N H O</title>
    <link rel="stylesheet" href="../css/menuLateral.css">
    <link rel="shortcut icon" href="unesp.ico" type="image/x-icon">
    <link rel="icon" href="../img/faviconlogin.png"> <!--icone na guia-->
</head>

<body>
    <input type="checkbox" id="check">
    <header>
    
    </header>
    
    <div class="tpfix2">
               
    </div> 
    
    
    <div class="content">

            <div class="card">

                <div class='table'>
 
     <form action="?acao=up" method="post">
     
     <?php
         $total = 0.0;
 
         // Criar linhas com os dados dos produtos
         if ($res_lista)
         foreach ($res_lista as $linha)
         { 
             $id_produto = $linha['id_produto'];
             $total += floatval($linha['subtotal']);
             if($id_produto == 0)
             {
                echo"Nenhum produto adicionado";
             }
     ?>        
            <div class='row'>
                 <div class='cell cellNome'>
                     <?php echo $linha['nome']; ?>
                     
                     <?php echo $linha['preco']; ?>
                     
                     <?php echo "<br>"; ?>
                 
                     <input type="text" size="3" name="prod[<?php echo $id_produto; ?>]"
                         value="<?php echo $linha['qtde']; ?>" />
                 
                     <?php echo $total; ?>
        
                     <a href='carrinho_back.php?acao=del&id_produto=<?php echo $id_produto; ?>'>Excluir</a>
                 </div>
                 <br>
             </div>
     <?php 
         }  
         
         
         echo "<h3>Total: R$ ".number_format($total, 2, ',', '.');".</h3>";
     ?>
    <input type="submit" id="btn-atualizar" value="Atualizar" />&nbsp;&nbsp;
	<br><br>
	<a class="btn-finalizar" href="./confirma_compra_front.php" target="_blank">Finalizar</a>
    <br><br>
    
     </form>

            </div>
        </div>
    
</body>
</html>