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

if(isset($_POST['ajuda_financeira'])){

    session_start();
    $id_usuario = $_SESSION['id_usuario'];
    $controle = $_POST['controle'];
    $impedido = $_POST['impedido'];
    $acesso = $_POST['acesso'];
    $controlador = $_POST['controlador'];
    $coagido = $_POST['coagido'];
    $procurou_ajuda = $_POST['procurou_ajuda'];
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('Y-m-d');
    $horario = date('H:i:s');

    $ajudas  = new Ajuda();
    $ajudas->armazenarAjudaFinanceira($id_usuario, $controle, $impedido, $acesso, $controlador, $coagido, $procurou_ajuda, $data, $horario);

}

if(isset($_POST['ajuda_fisica'])){

    session_start();
    $id_usuario = $_SESSION['id_usuario'];
    $agressoes = $_POST['agressoes'];
    $frequencia = $_POST['frequencia'];
    $atend_medico = $_POST['atend_medico'];
    $agressor = $_POST['agressor'];
    $relatado = $_POST['relatado'];
    $seguranca = $_POST['seguranca'];
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('Y-m-d');
    $horario = date('H:i:s');

    $ajudas  = new Ajuda();
    $ajudas->armazenarAjudaFisica($id_usuario, $agressoes, $frequencia, $atend_medico, $agressor, $relatado, $seguranca, $data, $horario);

}

if(isset($_POST['ajuda_insti'])){

    session_start();
    $id_usuario = $_SESSION['id_usuario'];
    
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('Y-m-d');
    $horario = date('H:i:s');

    $ajudas  = new Ajuda();
    $ajudas->armazenarAjudaInstitucional($id_usuario, $data, $horario);

}

if(isset($_POST['ajuda_moral'])){

    session_start();
    $id_usuario = $_SESSION['id_usuario'];

    date_default_timezone_set('America/Sao_Paulo');
    $data = date('Y-m-d');
    $horario = date('H:i:s');

    $ajudas  = new Ajuda();
    $ajudas->armazenarAjudaMoral($id_usuario, $data, $horario);

}

if(isset($_POST['ajuda_psicologica'])){

    session_start();
    $id_usuario = $_SESSION['id_usuario'];
    
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('Y-m-d');
    $horario = date('H:i:s');

    $ajudas  = new Ajuda();
    $ajudas->armazenarAjudaPsicologica($id_usuario, $data, $horario);

}

if(isset($_POST['ajuda_sexual'])){

    session_start();
    $id_usuario = $_SESSION['id_usuario'];
    
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('Y-m-d');
    $horario = date('H:i:s');

    $ajudas  = new Ajuda();
    $ajudas->armazenarAjudaSexual($id_usuario, $data, $horario);

}

if(isset($_POST['ajuda_verbal'])){

    session_start();
    $id_usuario = $_SESSION['id_usuario'];

    date_default_timezone_set('America/Sao_Paulo');
    $data = date('Y-m-d');
    $horario = date('H:i:s');

    $ajudas  = new Ajuda();
    $ajudas->armazenarAjudaVerbal($id_usuario, $data, $horario);

}