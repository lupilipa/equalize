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
    $discriminado = $_POST['discriminado'];
    $instituicao = $_POST['instituicao'];
    $negligenciado = $_POST['negligenciado'];
    $ja_denunciou = $_POST['ja_denunciou'];
    $afetou_acesso = $_POST['afetou_acesso'];
    $confianca = $_POST['confianca'];
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('Y-m-d');
    $horario = date('H:i:s');

    $ajudas  = new Ajuda();
    $ajudas->armazenarAjudaInstitucional($id_usuario, $discriminado, $instituicao, $negligenciado, $ja_denunciou, $afetou_acesso, $confianca, $data, $horario);

}

if(isset($_POST['ajuda_moral'])){

    session_start();
    $id_usuario = $_SESSION['id_usuario'];
    $difamado = $_POST['difamado'];
    $afetou_imagem = $_POST['afetou_imagem'];
    $agressor = $_POST['agressor'];
    $perseguido = $_POST['perseguido'];
    $procurou_ajuda = $_POST['procurou_ajuda'];
    $continua = $_POST['continua'];
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('Y-m-d');
    $horario = date('H:i:s');

    $ajudas  = new Ajuda();
    $ajudas->armazenarAjudaMoral($id_usuario, $difamado, $afetou_imagem, $agressor, $perseguido, $procurou_ajuda, $continua, $data, $horario);

}

if(isset($_POST['ajuda_psicologica'])){

    session_start();
    $id_usuario = $_SESSION['id_usuario'];
    $manipulado = $_POST['manipulado'];
    $isolado = $_POST['isolado'];
    $ameacado = $_POST['ameacado'];
    $agressor = $_POST['agressor'];
    $depressao = $_POST['depressao'];
    $procurou_ajuda = $_POST['procurou_ajuda'];
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('Y-m-d');
    $horario = date('H:i:s');

    $ajudas  = new Ajuda();
    $ajudas->armazenarAjudaPsicologica($id_usuario, $manipulado, $isolado, $ameacado, $agressor, $depressao, $procurou_ajuda, $data, $horario);

}

if(isset($_POST['ajuda_sexual'])){

    session_start();
    $id_usuario = $_SESSION['id_usuario'];
    $forcado = $_POST['forcado'];
    $tocado = $_POST['tocado'];
    $seguro = $_POST['seguro'];
    $agressor = $_POST['agressor'];
    $procurou_ajuda = $_POST['procurou_ajuda'];
    $medo = $_POST['medo'];
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('Y-m-d');
    $horario = date('H:i:s');

    $ajudas  = new Ajuda();
    $ajudas->armazenarAjudaSexual($id_usuario, $forcado, $tocado, $seguro, $agressor, $procurou_ajuda, $medo, $data, $horario);

}

if(isset($_POST['ajuda_verbal'])){

    session_start();
    $id_usuario = $_SESSION['id_usuario'];
    $xingado = $_POST['xingado'];
    $frequencia = $_POST['frequencia'];
    $agressor = $_POST['agressor'];
    $afeta_saude = $_POST['afeta_saude'];
    $ja_pediu = $_POST['ja_pediu'];
    $ja_conversou = $_POST['ja_conversou'];
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('Y-m-d');
    $horario = date('H:i:s');

    $ajudas  = new Ajuda();
    $ajudas->armazenarAjudaVerbal($id_usuario, $xingado, $frequencia, $agressor, $afeta_saude, $ja_pediu, $ja_conversou, $data, $horario);

}

if (isset($_GET['id_digital'])) {
    $id_digital = $_GET['id_digital'];

    $ajuda  = new Ajuda();
    $ajudaDetalhes = $ajuda->listarDigitalModal($id_digital);

    if ($ajudaDetalhes) {
        echo json_encode($ajudaDetalhes);
    } else {
        echo json_encode(['error' => 'Ajuda não encontrada']);
    }
} 

?>
