<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Perline Art</title>
</head>
<body>
<div class="menu">
   <h1>Cadastro de novo usuário</h1><br>
            <form action="./novoUsuarioBack.php" method="post">
            <table>
                <tr align="left">
                    <th width="300px"><p>Nome:</p></th>
                    <th width="300px"><input type="text" name="USERNAME" maxlength="70" size="26" value="Deolindo S. Neto" required></th>
                </tr>
                <tr align="left">
                   <th><p>Email:</p></th>
                   <th><input type="email" size="70" name="USEREMAIL" value="deolindo.scandolera@unesp.br" required></th>
                </tr>
                <tr align="left">
                   <th><p>Telefone:</p></th>
                   <th><input type="text" name="USERFONE" maxlength="11" placeholder="Ex. 14981665544" size="26" value="14982155663" required></th>
                </tr>
                <tr align="left">
                   <th><p>Aniversário:</p></th>
                   <th><input type="date" name="USERNASC" value="2006-03-03" required></th>
                </tr>
                <tr align="left">
                   <th><p>CPF:</p></th>
                   <th><input type="text" name="USERCPF" maxlength="11" placeholder="Ex. 09610068422" value="53403686884" required></th>
                </tr>
                <tr align="left">
                   <th><p>CEP:</p></th>
                   <th><input type="text" name="USERCEP" maxlength="8" placeholder="Ex. 17250000" value="17250272" required></th>
                </tr>
                <tr align="left">
                   <th><p>Senha:</p></th>
                   <th><input type="password" name="USERSENHA" value="deo1234" required></th>
                </tr>
                <tr align="left">
                   <th><p>Sexo:</p></th>
                   <th>     
                            <select name="USERSEX" multiple> <!--Se tirar o size vira uma dropbox-->
                                <option value="Fem">Feminino</option>
                                <option value="Mas">Masculino</option>
                                <option value="N/A">N/A</option>
                            </select>
                    </th>
                </tr>
                    <th colspan="2"><input type="submit" value="Cadastrar">&nbsp;&nbsp;<input type="reset" value="Limpar"></th>
                </tr>        
            </table>
            </form><br>
   </div>         
</body>
</html>