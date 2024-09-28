<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedir Ajuda - Equalize</title>
    <link rel="icon" href="../../../media/logos.png" type="image/png">
    <link rel="stylesheet" href="../../../css/style.css">

</head>

<body>

    <header>
        <input type="checkbox" name="menuHamb" id="menuHambId" style="display:none;">
        <div class="container">
            <label for="menuHambId"><div class="hamburger"></div></label>
        </div>
        <nav id="menu-links">
            <ul>
                <li><a class="btn-sair" href="../../../../logica/controllers/ControllerLogin.php?logout">Sair</a></li>
                <li><a class="btn-menu" href="../home_anonimo.php">Home</a></li>
                <li><a class="btn-menu" href="../identificar/como_identificar.php">Como identificar?</a></li>
                <li><a class="btn-menu" href="pedir_ajuda.php">Pedir Ajuda</a></li>
                <li><a class="btn-menu" href="../relatos_ver.php">Relatos</a></li>
                <li><a class="btn-menu" href="../projeto.php">O projeto</a></li>
                <li><a class="btn-menu" href="../contatos.php">Contatos</a></li>
            </ul>
        </nav>
        <div class="fade"></div>
        <div class="titulo">
            <p>Equalize</p>
        </div>
    </header>
    
    <main>
        <div class="titulo">
            <h1>Pedir Ajuda</h1>
        </div>
        <section>
            <article>
                <h2>Não sabe qual violência foi praticada?</h2>
                <p>Saiba mais sobre os <strong>tipos de violência</strong> <a href="../identificar/como_identificar.php">aqui</a> e peça uma ajuda de forma mais específica.</p>
            </article>
        </section>
        <section>
            <article>
                <h2>Clique em algum link:</h2>
                <a class="btn-menu" href="violencias/ajuda_fisica.php">Violência Física</a></br>
                <a class="btn-menu" href="violencias/ajuda_psicologica.php">Violência Psicologica</a></br>
                <a class="btn-menu" href="violencias/ajuda_sexual.php">Violência Sexual</a></br>
                <a class="btn-menu" href="violencias/ajuda_financeira.php">Violência Financeira</a></br>
                <a class="btn-menu" href="violencias/ajuda_verbal.php">Violência Verbal</a></br>
                <a class="btn-menu" href="violencias/ajuda_moral.php">Violência Moral</a></br>
                <a class="btn-menu" href="violencias/ajuda_institucional.php">Violência Institucional</a></br>
                <a class="btn-menu" href="violencias/ajuda_digital.php">Violência Digital</a></br>
            </article>
        </section>
    </main>

    <footer>
        <div class="copyright">
            <p>&copy; Desenvolvido por Luana e Ramon.</p></div>
        <div class="escola">
            <p>E.E.E.P Salaberga Torquarto Gomes de Matos</p></div>
        <div class="links">
            <div class="paginas">
                <ul>
                    <li><a class="btn-menu" href="../identificar/como_identificar.php">Como identificar?</a></li>
                    <li><a class="btn-menu" href="pedir_ajuda.php">Pedir Ajuda</a></li>
                    <li><a class="btn-menu" href="../relatos_ver.php">Relatos</a></li>
                    <li><a class="btn-menu" href="../projeto.php">O projeto</a></li>
                    <li><a class="btn-menu" href="../contatos.php">Contatos</a></li>
                </ul>
            </div>
        </div>
    </footer>
    
    <script src="../../../js/fade.js"></script>

</body>

</html>