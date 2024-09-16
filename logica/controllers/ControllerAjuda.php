<?php

require('../models/Ajuda.class.php');
require('../models/Usuario.class.php');

if(isset($_POST['ajuda_digital'])){

    session_start();
    $id_usuario = $_SESSION['id_usuario'];
    $vitima = $_POST['vitima'];
    $frequencia = $_POST['frequencia'];
    $agressor = $_POST['agressor'];
    $inseguro = $_POST['inseguro'];
    $ja_denunciou = $_POST['ja_denunciou'];
    $protegido = $_POST['protegido'];
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('Y-m-d');
    $horario = date('H:i:s');

    $ajudas  = new Ajuda();
    $ajudas->armazenarAjudaDigital($id_usuario, $vitima, $frequencia, $agressor, $inseguro, $ja_denunciou, $protegido, $data, $horario);

}