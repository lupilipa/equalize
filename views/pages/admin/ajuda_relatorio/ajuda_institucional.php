<?php
require('../../../../logica/models/Ajuda.class.php'); 

$controller = new Ajuda(); 
$ajuda = $controller->listarAjudaInstitucional();  
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
            <h1>Pedido de Ajuda: Violência Institucional</h1>
            <button onclick="window.open('../../../../gerarPDF/gerarPDFInst.php')">Gerar PDF</button>
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
                            <td><button onclick="abrirModalInstitucional(<?php echo $row['id_violencia']; ?>)">Ver Detalhes</button></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div id="modalInstitucional" class="modal">
            <div class="modal-content">
                <span class="close" onclick="fecharModal()">&times;</span>
                <h2>Detalhes da Ajuda</h2>
                <h3>Id da Violência:</h3>
                <p id="idViolencia"></p>
                <h3>Nome do Usuário:</h3>
                <p id="nomeUser"></p>
                <h3>Você já sofreu discriminação ou tratamento abusivo em algum serviço público ou privado?</h3>
                <p id="discriminado"></p>
                <h3>Em qual tipo de instituição isso ocorreu?</h3>
                <p id="instituicao"></p>
                <h3>Você foi negligenciado(a) ou teve direitos negados?</h3>
                <p id="negligenciado"></p>
                <h3>Você já fez uma denúncia sobre esse tratamento?</h3>
                <p id="ja_denunciou"></p>
                <h3>Essas situações afetaram seu acesso a serviços ou direitos básicos?</h3>
                <p id="afetou_acesso"></p>
                <h3>Como você descreveria sua confiança nas instituições atualmente?</h3>
                <p id="confianca"></p>
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
    <script src="../../../js/ajuda_institucional.js"></script>

</body>

</html>