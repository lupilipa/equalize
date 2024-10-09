<?php
require('../../../../logica/models/Ajuda.class.php'); 

$controller = new Ajuda(); 
$ajuda = $controller->listarAjudaPsicologica();  
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
    <link rel="stylesheet" href="../../../css/styles.css">
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
            <h1>Pedido de Ajuda: Violência Psicológica</h1>
            <button onclick="window.open('../../../../gerarPDF/gerarPDFPsico.php')">Gerar PDF</button>
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
                            <td><button onclick="abrirModalPsicologica(<?php echo $row['id_violencia']; ?>)">Ver Detalhes</button></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div id="modalPsicologica" class="modal">
            <div class="modal-content">
                <span class="close" onclick="fecharModal()">&times;</span>
                <h2>Detalhes da Ajuda</h2>
                <h3>Id da Violência:</h3>
                <p id="idViolencia"></p>
                <h3>Nome do Usuário:</h3>
                <p id="nomeUser"></p>
                <h3>Você sente que alguém constantemente tenta te humilhar, intimidar ou manipular?</h3>
                <p id="manipulado"></p>
                <h3>Você é frequentemente isolado(a) de amigos ou familiares?</h3>
                <p id="isolado"></p>
                <h3>Você já foi ameaçado(a) de alguma forma (perda de algo importante, abandono, etc.)?</h3>
                <p id="ameacado"></p>
                <h3>Quem é a pessoa que comete esses atos contra você?</h3>
                <p id="agressor"></p>
                <h3>Esses comportamentos fazem você se sentir ansioso(a) ou deprimido(a)?</h3>
                <p id="depressao"></p>
                <h3>Você já procurou ajuda psicológica ou apoio emocional para lidar com isso?</h3>
                <p id="procurou_ajuda"></p>
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
    <script src="../../../js/ajuda_psicologica.js"></script>

</body>

</html>