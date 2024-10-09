<?php
require('../../../logica/models/Relatos.class.php'); 

$controller = new Relatos(); 
$relatos = $controller->listarRelatos();  
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatos - Equalize</title>
    <link rel="icon" href="../../media/logos.png" type="image/png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/table.css">

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
    
    <main>

        <div class="titulo">
            <h1>Relatos: ADM</h1>
        </div>
        <div class="table">
            <table id="table">
                <thead>
                    <tr>
                        <th>Nome do Usuário</th>
                        <th>Relato</th>
                        <th>Data</th>
                        <th>Horário</th>
                        <th>Ação</th>
                        <th>Disponibilizar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($relatos as $row): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['nome']) ?></td>
                            <td><?= htmlspecialchars($row['relato']) ?></td>
                            <td><?= htmlspecialchars($row['data']) ?></td>
                            <td><?= htmlspecialchars($row['horario']) ?></td>
                            <td><?php if($row['disponibilizado'] == 1) { echo "Mostrando";} else { echo "Oculto";} ?></td>
                            <?php if($row['disponibilizado'] == 1) {
                                    echo "<td><button onclick='abrirOcultar(" . $row['id_relato'] . ")'>Ocultar</button></td>";
                                } else { 
                                    echo "<td><button onclick='abrirMostrar(" . $row['id_relato'] . ")'>Mostrar</button></td>";
                            } ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Modal -->
        <div id="modalMostrar">
            <div id="modal-content">
                <p>Tem certeza que deseja disponibilizar este relato?</p>
                <button id="mostrarRelato">Mostrar</button>
                <button id="mostrarCancelar">Cancelar</button>
            </div>
        </div>

        <div id="modalOcultar">
            <div id="modal-content">
                <p>Tem certeza que deseja ocultar este relato?</p>
                <button id="ocultarRelato">Ocultar</button>
                <button id="ocultarCancelar">Cancelar</button>
            </div>
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
                    <li><a class="btn-menu" href="home_adm.php">Home</a></li>
                    <li><a class="btn-menu" href="ajuda_adm.php">Ajuda: ADM</a></li>
                    <li><a class="btn-menu" href="relatos_adm.php">Relatos: ADM</a></li>
                </ul>
            </div>
        </div>
    </footer>
    
    <script src="../../js/fade.js"></script>
    <script src="../../js/relatos.js"></script>

</body>

</html>