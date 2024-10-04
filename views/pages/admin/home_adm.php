<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Equalize</title>
    <link rel="icon" href="../../media/logos.png" type="image/png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../../css/index.css">
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
            <h2>Home</h2>
        </div>
    </header>
    
    <section>
        <a class="btn-menu" href="home_adm.php">Home</a></br>
        <a class="btn-menu" href="ajuda_adm.php">Ajuda: ADM</a></br>
        <a class="btn-menu" href="relatos_adm.php">Relatos: ADM</a></br>
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