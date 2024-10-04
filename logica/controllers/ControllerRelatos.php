<?php

require('../models/Relatos.class.php');
require('../models/Usuarios.class.php');

if(isset($_POST['enviar_relato'])){

    session_start();
    $id_usuario = $_SESSION['id_usuario'];
    $relato = $_POST['relato'];
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('Y-m-d');
    $horario = date('H:i:s');

    $relato = new Relatos(); // Passe a instância de PDO ao controller
    $relato->inserirRelato($id_usuario, $relato, $data, $horario);

}

if (isset($_POST['id_relato'])) {

    session_start();
    $id_relato = $_POST['id_relato'];
    $relato = new Relatos();
    $resultado = $relato->disponibilizarRelato($id_relato);

    // Retorna um JSON
    if ($resultado) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Erro ao atualizar']);
    }
} 