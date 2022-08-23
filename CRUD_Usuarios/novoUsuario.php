<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Perline Art</title>
</head>
<body>
<h1>Cadastro de novo usuário</h1><br>
            <form action="./novoUsuarioBack.php" method="post">
            <table>
                <tr align="left">
                    <th width="300px"><p>Nome:</p></th>
                    <th width="300px"><input type="text" name="USERNAME" maxlength="70" size="26" placeholder="Ex: Seu Nome" required></th>
                </tr>
                <tr align="left">
                   <th><p>Email:</p></th>
                   <th><input type="email" size="70" name="USEREMAIL" placeholder="Ex: seuemail@gmail.com.br" required></th>
                </tr>
                <tr align="left">
                   <th><p>Telefone:</p></th>
                   <th><input type="number" name="USERFONE" maxlength="11" placeholder="Ex: 14981665544" size="26" required></th>
                </tr>
                <tr align="left">
                   <th><p>Aniversário:</p></th>
                   <th><input type="date" name="USERNASC" required></th>
                </tr>
                <tr align="left">
                   <th><p>CPF:</p></th>
                   <th><input type="number" name="USERCPF" maxlength="11" placeholder="Ex: 09610068422" required></th>
                </tr>
                <tr align="left">
                   <th><p>CEP:</p></th>
                   <th><input type="number" name="USERCEP" maxlength="8" placeholder="Ex: 17250000" required></th>
                </tr>
                <tr align="left">
                   <th><p>Senha:</p></th>
                   <th><input type="password" name="USERSENHA" required></th>
                </tr>
                
                <tr align="left">
                   <th><p>Selecione seu Sexo</p></th>
                   <th><input type="radio" name="USERSEX" value="MASC" checked required>MASCULINO
                   <input type="radio" name="USERSEX" value="FEMI" required>FEMININO</th>
                </tr>
                   
                    <th colspan="2"><input type="submit" value="Cadastrar">&nbsp;&nbsp;
                                    <input type="reset" value="Limpar"></th>
                </tr>        
            </table>
            </form><br>
</body>
</html>
