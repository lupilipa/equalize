<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Equalize</title>
    <link rel="icon" href="../../media/logos.png" type="image/png">
    <link rel="stylesheet" href="../../css/login.css">
    <link rel="stylesheet" href="../../css/style.css">

</head>

<body>

    <main class="login">
        <div class="titulo">
            <h1>Login</h1>
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
                    <button type="submit" value="entrar" name="entrar">Entrar</button>
                </div>
                <div class="links">
                    <a href="cadastro.php" class="links">Criar meu acesso</a>
                </div>
            </form>
        </div>
    </main>
    <footer>
        <div class="copyright">
            <p>&copy; Desenvolvido por Luana e Ramon.</p></div>
        <div class="escola">
            <p>E.E.E.P Salaberga Torquarto Gomes de Matos</p></div>
        <div class="links">
            <div class="paginas">
                <ul>
                    <li><a class="btn-menu" href="../padrao/identificar/como_identificar.php">Como identificar?</a></li>
                    <li><a class="btn-menu" href="../padrao/pedir_ajuda/pedir_ajuda.php">Pedir Ajuda</a></li>
                    <li><a class="btn-menu" href="../padrao/relatos_ver.php">Relatos</a></li>
                    <li><a class="btn-menu" href="../padrao/projeto.php">O projeto</a></li>
                    <li><a class="btn-menu" href="../padrao/contatos.php">Contatos</a></li>
                </ul>
            </div>
        </div>
    </footer>

</body>

</html>