<?php

class Ajuda{

    public function armazenarAjudaDigital($id_usuario, $vitima, $frequencia, $agressor, $inseguro, $ja_denunciou, $protegido, $data, $horario){
        $pdo = new PDO("mysql:host=localhost;dbname=equalize", "root", "");
        $query = "INSERT INTO violencia_digital (id_usuario, vitima, frequencia, agressor, inseguro, ja_denunciou, protegido, data, horario) values (:id_usuario, :vitima, :frequencia, :agressor, :inseguro, :ja_denunciou, :protegido, :data, :horario)";
        $result = $pdo->prepare($query);
        $result->bindValue(":id_usuario", $id_usuario);
        $result->bindValue(":vitima", $vitima);
        $result->bindValue(":frequencia", $frequencia);
        $result->bindValue(":agressor", $agressor);
        $result->bindValue(":inseguro", $inseguro);
        $result->bindValue(":ja_denunciou", $ja_denunciou);
        $result->bindValue(":protegido", $protegido);
        $result->bindValue(":data", $data);
        $result->bindValue(":horario", $horario);
        $result->execute();

        header('location:../../views/pages/anonimo/pedir_ajuda/resultado/resultado.php');
        
    }

    public function armazenarAjudaFinanceira($id_usuario, $controle, $impedido, $acesso, $controlador, $coagido, $procurou_ajuda, $data, $horario){
        $pdo = new PDO("mysql:host=localhost;dbname=equalize", "root", "");
        $query = "INSERT INTO violencia_financ (id_usuario, controle, impedido, acesso, controlador, coagido, procurou_ajuda, data, horario) values (:id_usuario, :controle, :impedido, :acesso, :controlador, :coagido, :procurou_ajuda, :data, :horario)";
        $result = $pdo->prepare($query);
        $result->bindValue(":id_usuario", $id_usuario);
        $result->bindValue(":controle", $controle);
        $result->bindValue(":impedido", $impedido);
        $result->bindValue(":acesso", $acesso);
        $result->bindValue(":controlador", $controlador);
        $result->bindValue(":coagido", $coagido);
        $result->bindValue(":procurou_ajuda", $procurou_ajuda);
        $result->bindValue(":data", $data);
        $result->bindValue(":horario", $horario);
        $result->execute();

        header('location:../../views/pages/anonimo/pedir_ajuda/resultado/resultado.php');
        
    }

    public function armazenarAjudaFisica($id_usuario, $agressoes, $frequencia, $atend_medico, $agressor, $relatado, $seguranca, $data, $horario){
        $pdo = new PDO("mysql:host=localhost;dbname=equalize", "root", "");
        $query = "INSERT INTO violencia_fisica (id_usuario, agressoes, frequencia, atend_medico, agressor, relatado, seguranca, data, horario) values (:id_usuario, :agressoes, :frequencia, :atend_medico, :agressor, :relatado, :seguranca, :data, :horario)";
        $result = $pdo->prepare($query);
        $result->bindValue(":id_usuario", $id_usuario);
        $result->bindValue(":agressoes", $agressoes);
        $result->bindValue(":frequencia", $frequencia);
        $result->bindValue(":atend_medico", $atend_medico);
        $result->bindValue(":agressor", $agressor);
        $result->bindValue(":relatado", $relatado);
        $result->bindValue(":seguranca", $seguranca);
        $result->bindValue(":data", $data);
        $result->bindValue(":horario", $horario);
        $result->execute();

        header('location:../../views/pages/anonimo/pedir_ajuda/resultado/resultado.php');
        
    }

    public function armazenarAjudaInstitucional($id_usuario, $discriminado, $instituicao, $negligenciado, $ja_denunciou, $afetou_acesso, $confianca, $data, $horario){
        $pdo = new PDO("mysql:host=localhost;dbname=equalize", "root", "");
        $query = "INSERT INTO violencia_insti (id_usuario, discriminado, instituicao, negligenciado, ja_denunciou, afetou_acesso, confianca, data, horario) values (:id_usuario, :discriminado, :instituicao, :negligenciado, :ja_denunciou, :afetou_acesso, :confianca, :data, :horario)";
        $result = $pdo->prepare($query);
        $result->bindValue(":id_usuario", $id_usuario);
        $result->bindValue(":discriminado", $discriminado);
        $result->bindValue(":instituicao", $instituicao);
        $result->bindValue(":negligenciado", $negligenciado);
        $result->bindValue(":ja_denunciou", $ja_denunciou);
        $result->bindValue(":afetou_acesso", $afetou_acesso);
        $result->bindValue(":confianca", $confianca);
        $result->bindValue(":data", $data);
        $result->bindValue(":horario", $horario);
        $result->execute();

        header('location:../../views/pages/anonimo/pedir_ajuda/resultado/resultado.php');
        
    }

    public function armazenarAjudaMoral($id_usuario, $difamado, $afetou_imagem, $agressor, $perseguido, $procurou_ajuda, $continua, $data, $horario){
        $pdo = new PDO("mysql:host=localhost;dbname=equalize", "root", "");
        $query = "INSERT INTO violencia_moral (id_usuario, difamado, afetou_imagem, agressor, perseguido, procurou_ajuda, continua, data, horario) values (:id_usuario, :difamado, :afetou_imagem, :agressor, :perseguido, :procurou_ajuda, :continua, :data, :horario)";
        $result = $pdo->prepare($query);
        $result->bindValue(":id_usuario", $id_usuario);
        $result->bindValue(":difamado", $difamado);
        $result->bindValue(":afetou_imagem", $afetou_imagem);
        $result->bindValue(":agressor", $agressor);
        $result->bindValue(":perseguido", $perseguido);
        $result->bindValue(":procurou_ajuda", $procurou_ajuda);
        $result->bindValue(":continua", $continua);
        $result->bindValue(":data", $data);
        $result->bindValue(":horario", $horario);
        $result->execute();

        header('location:../../views/pages/anonimo/pedir_ajuda/resultado/resultado.php');
        
    }

    public function armazenarAjudaPsicologica($id_usuario, $manipulado, $isolado, $ameacado, $agressor, $depressao, $procurou_ajuda, $data, $horario){
        $pdo = new PDO("mysql:host=localhost;dbname=equalize", "root", "");
        $query = "INSERT INTO violencia_psico (id_usuario, manipulado, isolado, ameacado, agressor, depressao, procurou_ajuda, data, horario) values (:id_usuario, :manipulado, :isolado, :ameacado, :agressor, :depressao, :procurou_ajuda, :data, :horario)";
        $result = $pdo->prepare($query);
        $result->bindValue(":id_usuario", $id_usuario);
        $result->bindValue(":manipulado", $manipulado);
        $result->bindValue(":isolado", $isolado);
        $result->bindValue(":ameacado", $ameacado);
        $result->bindValue(":agressor", $agressor);
        $result->bindValue(":depressao", $depressao);
        $result->bindValue(":procurou_ajuda", $procurou_ajuda);
        $result->bindValue(":data", $data);
        $result->bindValue(":horario", $horario);
        $result->execute();

        header('location:../../views/pages/anonimo/pedir_ajuda/resultado/resultado.php');
        
    }

    public function armazenarAjudaSexual($id_usuario, $forcado, $tocado, $seguro, $agressor, $procurou_ajuda, $medo, $data, $horario){
        $pdo = new PDO("mysql:host=localhost;dbname=equalize", "root", "");
        $query = "INSERT INTO violencia_sexual (id_usuario, forcado, tocado, seguro, agressor, procurou_ajuda, medo, data, horario) values (:id_usuario, :forcado, :tocado, :seguro, :agressor, :procurou_ajuda, :medo, :data, :horario)";
        $result = $pdo->prepare($query);
        $result->bindValue(":id_usuario", $id_usuario);
        $result->bindValue(":forcado", $forcado);
        $result->bindValue(":tocado", $tocado);
        $result->bindValue(":seguro", $seguro);
        $result->bindValue(":agressor", $agressor);
        $result->bindValue(":procurou_ajuda", $procurou_ajuda);
        $result->bindValue(":medo", $medo);
        $result->bindValue(":data", $data);
        $result->bindValue(":horario", $horario);
        $result->execute();

        header('location:../../views/pages/anonimo/pedir_ajuda/resultado/resultado.php');
        
    }

    public function armazenarAjudaVerbal($id_usuario, $xingado, $frequencia, $agressor, $afeta_saude, $ja_pediu, $ja_conversou, $data, $horario){
        $pdo = new PDO("mysql:host=localhost;dbname=equalize", "root", "");
        $query = "INSERT INTO violencia_verbal (id_usuario, xingado, frequencia, agressor, afeta_saude, ja_pediu, ja_conversou, data, horario) values (:id_usuario, :xingado, :frequencia, :agressor, :afeta_saude, :ja_pediu, :ja_conversou, :data, :horario)";
        $result = $pdo->prepare($query);
        $result->bindValue(":id_usuario", $id_usuario);
        $result->bindValue(":xingado", $xingado);
        $result->bindValue(":frequencia", $frequencia);
        $result->bindValue(":agressor", $agressor);
        $result->bindValue(":afeta_saude", $afeta_saude);
        $result->bindValue(":ja_pediu", $ja_pediu);
        $result->bindValue(":ja_conversou", $ja_conversou);
        $result->bindValue(":data", $data);
        $result->bindValue(":horario", $horario);
        $result->execute();

        header('location:../../views/pages/anonimo/pedir_ajuda/resultado/resultado.php');
        
    }

}