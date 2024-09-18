<?php

require('../models/Relatos.class.php');
require('../models/Usuario.class.php');

if(isset($_POST['enviar_relato'])){

    session_start();
    $id_usuario = $_SESSION['id_usuario'];
    $relato = $_POST['relato'];
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('Y-m-d');
    $horario = date('H:i:s');

    $relatos  = new Relatos();
    $relatos->inserirRelato($id_usuario, $relato, $data, $horario);

}