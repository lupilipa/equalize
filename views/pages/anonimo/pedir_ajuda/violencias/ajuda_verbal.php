<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Violência Verbal - Equalize</title>
    <link rel="icon" href="../../../../media/logos.png" type="image/png">
    <link rel="stylesheet" href="../../../../css/style.css">
    <link rel="stylesheet" href="../../../../css/form-ajuda.css">

</head>

<body>

    <header>
        <input type="checkbox" name="menuHamb" id="menuHambId" style="display:none;">
        <div class="container">
            <label for="menuHambId">
                <div class="hamburger"></div>
            </label>
        </div>
        <nav id="menu-links">
            <ul>
                <li><a class="btn-sair" href="../../../../../logica/controllers/ControllerLogin.php?logout">Sair</a></li>
                <li><a class="btn-menu" href="../../home_anonimo.php">Home</a></li>
                <li><a class="btn-menu" href="../../identificar/como_identificar.php">Como identificar?</a></li>
                <li><a class="btn-menu" href="../pedir_ajuda.php">Pedir Ajuda</a></li>
                <li><a class="btn-menu" href="../../relatos_ver.php">Relatos</a></li>
                <li><a class="btn-menu" href="../../projeto.php">O projeto</a></li>
                <li><a class="btn-menu" href="../../contatos.php">Contatos</a></li>
            </ul>
        </nav>
        <div class="fade"></div>
        <div class="titulo">
            <p>Equalize</p>
        </div>
    </header>

    <main>
        <div class="titulo">
            <h1>Violência Verbal</h1>
        </div>
        <div class="form">
            <form action="../../../../../logica/controllers/ControllerAjuda.php" method="post">
                <div class="input">
                    <label for="xingado">Alguém frequentemente usa palavras ofensivas, xingamentos ou te humilha? </label></br>
                    <select id="xingado" name="xingado">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                    </select>
                </div></br>

                <div class="input">
                    <label for="frequencia">Com que frequência esses insultos ocorrem?</label></br>
                    <select id="frequencia" name="frequencia">
                        <option value="diariamente">Diariamente</option>
                        <option value="semanalmente">Semanalmente</option>
                        <option value="mensalmente">Mensalmente</option>
                        <option value="ocasionalmente">Ocasionalmente</option>
                    </select>
                </div></br>

                <div class="input">
                    <label for="agressor">Quem é a pessoa que pratica essa violência?</label></br>
                    <select id="agressor" name="agressor">
                        <option value="parceiro">Parceiro</option>
                        <option value="familiar">Familiar</option>
                        <option value="colega">Colega de Trabalho</option>
                        <option value="outro">Outro</option>
                    </select>
                </div></br>

                <div class="input">
                    <label for="afeta_saude">Esses insultos afetam sua autoestima ou saúde mental?</label></br>
                    <select id="afeta_saude" name="afeta_saude">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                    </select>
                </div></br>

                <div class="input">
                    <label for="ja_pediu">Você já pediu a essa pessoa para parar com esses comportamentos?</label></br>
                    <select id="ja_pediu" name="ja_pediu">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                    </select>
                </div></br>

                <div class="input">
                    <label for="ja_conversou">Você já conversou com alguém sobre isso?</label></br>
                    <select id="ja_conversou" name="ja_conversou">
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                    </select>
                </div></br>

                <div class="button">
                    <button type="submit" value="ajuda_verbal" name="ajuda_verbal">Enviar</button>
                </div>
            </form>
        </div>
    </main>

    <footer>
        <div class="copyright">
            <p>&copy; Desenvolvido por Luana e Ramon.</p>
        </div>
        <div class="escola">
            <p>E.E.E.P Salaberga Torquarto Gomes de Matos</p>
        </div>
        <div class="links">
            <div class="paginas">
                <ul>
                    <li><a class="btn-menu" href="../../identificar/como_identificar.php">Como identificar?</a></li>
                    <li><a class="btn-menu" href="../pedir_ajuda.php">Pedir Ajuda</a></li>
                    <li><a class="btn-menu" href="../../relatos_ver.php">Relatos</a></li>
                    <li><a class="btn-menu" href="../../projeto.php">O projeto</a></li>
                    <li><a class="btn-menu" href="../../contatos.php">Contatos</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="../../../../js/fade.js"></script>

</body>

</html>