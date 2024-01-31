
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="logincss/login.css">
    <link rel="stylesheet" href="../btsp/css/bootstrap.css">
</head>
<body>
    <div class="page">
        <form method="POST" action='envcad.php' class="formLogin">
            <h1>Cadastro</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label >Login</label>
            <input type="text" placeholder="Digite seu login" name="Login"/>

            <label >CPF</label>
            <input type="text" placeholder="Digite seu cpf" name="CPF"/>

            <label for="email">E-mail</label>
            <input type="email" placeholder="Digite seu e-mail" name="EMAIL" autofocus="true" />

            <label for="password">Senha</label>
            <input type="password" name="Senha" placeholder="Digite a sua senha" />

            <label for="password">Confirme sua senha</label>
            <input type="password" name="CSenha" placeholder="Confirme sua senha" />

            <label >Status</label>
            <input type="text" placeholder="Status" name="Status"/>

            <label >Função</label>
            <select name="FUNC" >
                <option>SELECIONE UMA OPÇÃO</option>
                <option>Professor</option>
                <option>Aluno</option>
            </select>


            <input type="submit" name="butao" value="Enviar cadastro" class="btn" />
       </div>
        </form>
</body>
</html>