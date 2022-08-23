<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Perline</title>
        <link rel="stylesheet" type="text/css" href="../estilo.css">
    </head>
    <body>
     <div class="divfixa">
        <div class="divimg"><img src="../imagens/logo.png" height="90px"></div>
            <br><br>
            <table width="85%">
                <tr>
                    <th align="left">
                    <a class="botao" href="../index.html" target="_blank">Home</a>&nbsp;
                    <a class="botao" href="#Produtos" target="_blank">Produtos</a>&nbsp;
                    <a class="botao" href="../local.html" target="_blank">Conheça Nossa Loja Física</a>&nbsp;
                    <a class="botao" href="../sobre.html" target="_blank">Sobre</a>&nbsp;
                    <a class="botao" href="../patrocinadores.html" target="_blank">Patrocinadores</a>&nbsp;
                    </th>
                    <th align="right">
                    <a class="botao" href="#Carrinho" target="_blank">Carrinho</a>&nbsp;
                    <a class="botao" href="../login.html" target="_blank">Login</a>&nbsp;
                    </th>
                </tr>
            </table>       
        </div>    
        <a name="topo"></a>
        <br><br><br><br>
        
        <!-- Início da página -->
        
        <br><br>
        <center><div class="menu"><br><br><br>
        <a class="voltar" href='./novoitemvenda.html'>Cadastrar novo Item-Venda</a><br><br>
        <?php
            include "tabelaitemvenda_back.php";
            if ($qtde == 0) {
                echo "Não foi encontrada nenhum Item-Venda !!!<br><br>";
                return;
            }
        // Começar tabela e criar o cabeçalho
        echo "
        <table class='table2' border='1' width='95%'>
            <tr height='90px'>
                <th width='200px'>
                    ID
                </th>
                <th width='200px'>
                    ID da Venda
                </th>
                <th width='200px'>
                    ID do Produto
                </th>
                <th width='200px'>
                    Quantidade
                </th>
                <th width='200px'>
                    Data e Hora da Venda
                </th>
                <th width='200px'>
                    Valor Unitário
                </th>
                <th width='200px'>
                    Valor Total
                </th>
                <th width='200px'>
                    Ações
                </th>
            </tr>";

            // Criar linhas com os dados dos produtos
            foreach ($resultado_lista as $linha)
            {
                echo "
                <tr height='90px'>
                    <th>
                        ".$linha['id_itemvenda']."
                    </th>
                    <th>
                        ".$linha['id_venda']."
                    </th>
                    <th>
                        ".$linha['id_produto']."
                    </th>
                    <th>
                        ".$linha['qtde']."
                    </th>
                    <th>
                        ".$linha['data_hora_venda']."
                    </th>
                    <th>
                        ".$linha['valor_unit']."
                    </th>
                    <th>
                        ".$linha['valor_total']."
                    </th>
                    <th>
                        <a class='voltar' href='alteraitemvenda.php?id_itemVenda=".$linha['id_itemvenda']."'>Alterar</a>&nbsp;
                        <a class='voltar' href='excluiitemvenda.php?id_itemVenda=".$linha['id_itemvenda']."'>Excluir</a>&nbsp;
                    </th>
                </tr> "; 
            } 
        // Fechando a tag da tabela
        echo "</table>";    
        ?>  
        <br><br><br><br><br></div></center>  
        
        <div id="divrodape">
            <center>
                <br>
                <a class="voltar" href="#topo">Clique aqui para voltar ao topo</a>
                <br><hr><br>
                <a class="botao" href="../index.html" target="_blank">Home</a>&nbsp;
                <a class="botao" href="#Produtos" target="_blank">Produtos</a>&nbsp;
                <a class="botao" href="../local.html" target="_blank">Conheça Nossa Loja Física</a>&nbsp;
                <a class="botao" href="../sobre.html" target="_blank">Sobre</a>&nbsp;
                <a class="botao" href="../patrocinadores.html" target="_blank">Patrocinadores</a>&nbsp;
                <a class="botao" href="#Carrinho" target="_blank">Carrinho</a>&nbsp;
                <a class="botao" href="../login.html" target="_blank">Login</a>&nbsp;
                <br><br><hr>
                <table>
                    <tr>
                        <td><white>Camila Eduarda - n°8 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </white></td>
                        <td><white>Deolindo Neto - n°12 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </white></td>
                        <td><white>Evelyn Mayra - n°15 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </white></td>
                        <td><white>Mariana Caroline - n°28 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </white></td>
                        <td><white>Matheus Soares - n°30</white></td>
                    </tr>
                </table>
            </center>
        </div>
    </body>
</html>