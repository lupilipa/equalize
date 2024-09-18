<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Equalize</title>
    <link rel="icon" href="../../media/logos.png" type="image/png">
    <link rel="stylesheet" href="../../css/login.css">

</head>

<body>

    <div class="login">
        <div class="titulo">
            <h2>Informe os seus dados</h2>
        </div>
        <div class="form">
            <form action="../../../logica/controllers/ControllerUsuario.php" method="post">
                <div class="input">
                    <input type="text" placeholder="Credencial" name="credencial" required>
                </div>
                <div class="input">
                    <input type="password" placeholder="Senha" name="senha" required>
                </div>
                <div class="button">
                    <button type="submit" value="cadastrar" name="cadastrar">Criar meu acesso</button>
                </div>
                <div class="links">
                    <a href="login.php" class="links">Já possuo acesso</a>
                </div>
            </form>
        </div>
    </div>
    
</body>

</html>