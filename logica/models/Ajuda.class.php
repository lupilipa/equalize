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

}