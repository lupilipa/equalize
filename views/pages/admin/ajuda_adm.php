<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajuda - Equalize</title>
    <link rel="icon" href="../../media/logos.png" type="image/png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../../css/style.css">

</head>

<body>

    <header>
        <input type="checkbox" name="menuHamb" id="menuHambId" style="display:none;">
        <div class="container">
            <label for="menuHambId"><div class="hamburger"></div></label>
        </div>
        <nav id="menu-links">
            <ul>
                <li><a class="btn-sair" href="../../../logica/controllers/ControllerLogin.php?logout">Sair</a></li>
                <li><a class="btn-menu" href="home_adm.php">Home</a></li>
                <li><a class="btn-menu" href="ajuda_adm.php">Ajuda: ADM</a></li>
                <li><a class="btn-menu" href="relatos_adm.php">Relatos: ADM</a></li>
            </ul>
        </nav>
        <div class="fade"></div>
        <div class="titulo">
            <h1>Equalize</h1>
        </div>
    </header>
    
    <section>
        <h1>Gerar Relatório de Ajuda</h1>      
        <a class="btn-menu" href="ajuda_relatorio/ajuda_fisica.php">Pedido de Ajuda: Violência Física</a></br>
        <a class="btn-menu" href="ajuda_relatorio/ajuda_psicologica.php">Pedido de Ajuda: Violência Psicológica</a></br>
        <a class="btn-menu" href="ajuda_relatorio/ajuda_sexual.php">Pedido de Ajuda: Violência Sexual</a></br>
        <a class="btn-menu" href="ajuda_relatorio/ajuda_financeira.php">Pedido de Ajuda: Violência Financeira</a></br>
        <a class="btn-menu" href="ajuda_relatorio/ajuda_verbal.php">Pedido de Ajuda: Violência Verbal</a></br>
        <a class="btn-menu" href="ajuda_relatorio/ajuda_moral.php">Pedido de Ajuda: Violência Moral</a></br>
        <a class="btn-menu" href="ajuda_relatorio/ajuda_institucional.php">Pedido de Ajuda: Violência Institucional</a></br>
        <a class="btn-menu" href="ajuda_relatorio/ajuda_digital.php">Pedido de Ajuda: Violência Digital</a></br>
    </section>

    <footer>
        <div class="copyright">
            <p>&copy; Desenvolvido por Luana e Ramon.</p></div>
        <div class="escola">
            <p>E.E.E.P Salaberga Torquarto Gomes de Matos</p></div>
        <div class="links">
            <div class="paginas">
                <ul>
                    <li><a class="btn-menu" href="home_adm.php">Home</a></li>
                    <li><a class="btn-menu" href="ajuda_adm.php">Ajuda: ADM</a></li>
                    <li><a class="btn-menu" href="relatos_adm.php">Relatos: ADM</a></li>
                </ul>
            </div>
        </div>
    </footer>
    
    <script src="../../js/fade.js"></script>

</body>

</html>