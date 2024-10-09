<?php
require('../../../../logica/models/Ajuda.class.php'); 

$controller = new Ajuda(); 
$ajuda = $controller->listarAjudaSexual();  
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajuda - Equalize</title>
    <link rel="icon" href="../../media/logos.png" type="image/png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="../../../css/ajuda.css">


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
                <li><a class="btn-menu" href="../home_adm.php">Home</a></li>
                <li><a class="btn-menu" href="../ajuda_adm.php">Ajuda: ADM</a></li>
                <li><a class="btn-menu" href="../relatos_adm.php">Relatos: ADM</a></li>
            </ul>
        </nav>
        <div class="fade"></div>
        <div class="titulo">
            <h1>Equalize</h1>
        </div>
    </header>
    
    <section>
        <div class="titulo">
            <h1>Pedido de Ajuda: Violência Sexual</h1>
            <button onclick="window.open('../../../../gerarPDF/gerarPDFSexual.php')">Gerar PDF</button>
        </div>
        <div class="table">
            <table id="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>data</th>
                        <th>horario</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ajuda as $row): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['id_violencia']) ?></td>
                            <td><?= htmlspecialchars($row['nome']) ?></td>
                            <td><?= htmlspecialchars($row['data']) ?></td>
                            <td><?= htmlspecialchars($row['horario']) ?></td>
                            <td><button onclick="abrirModalSexual(<?php echo $row['id_violencia']; ?>)">Ver Detalhes</button></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div id="modalSexual" class="modal">
            <div class="modal-content">
                <span class="close" onclick="fecharModal()">&times;</span>
                <h2>Detalhes da Ajuda</h2>
                <h3>Id da Violência:</h3>
                <p id="idViolencia"></p>
                <h3>Nome do Usuário:</h3>
                <p id="nomeUser"></p>
                <h3>Você já foi forçado(a) a ter contato sexual contra sua vontade?</h3>
                <p id="forcado"></p>
                <h3>Você já foi tocado(a) de forma inapropriada sem o seu consentimento? </h3>
                <p id="tocado"></p>
                <h3>Você se sente seguro(a) em sua vida sexual e íntima?</h3>
                <p id="seguro"></p>
                <h3>Quem cometeu esse ato contra você?</h3>
                <p id="agressor"></p>
                <h3>Você procurou ajuda ou denunciou esse comportamento?</h3>
                <p id="procurou_ajuda"></p>
                <h3>Você tem medo de que isso aconteça novamente?</h3>
                <p id="medo"></p>
                <h3>Data:</h3>
                <p id="date"></p>
                <h3>Horário:</h3>
                <p id="horario"></p>
            </div>
        </div>

    </section>

    <footer>
        <div class="copyright">
            <p>&copy; Desenvolvido por Luana e Ramon.</p></div>
        <div class="escola">
            <p>E.E.E.P Salaberga Torquarto Gomes de Matos</p></div>
        <div class="links">
            <div class="paginas">
                <ul>
                    <li><a class="btn-menu" href="../home_adm.php">Home</a></li>
                    <li><a class="btn-menu" href="../ajuda_adm.php">Ajuda: ADM</a></li>
                    <li><a class="btn-menu" href="../relatos_adm.php">Relatos: ADM</a></li>
                </ul>
            </div>
        </div>
    </footer>
    
    <script src="../../../js/fade.js"></script>
    <script src="../../../js/ajuda_sexual.js"></script>

</body>

</html>