<?php

class Relatos{

    public function inserirRelato($id_usuario, $relato, $data, $horario){
        $pdo = new PDO("mysql:host=localhost;dbname=equalize", "root", "");
        $query = "INSERT INTO relatos (id_usuario, relato, data, horario) values (:id_usuario, :relato, :data, :horario)";
        $result = $pdo->prepare($query);
        $result->bindValue(":id_usuario", $id_usuario);
        $result->bindValue(":relato", $relato);
        $result->bindValue(":data", $data);
        $result->bindValue(":horario", $horario);
        $result->execute();

        header('location:../../views/pages/anonimo/relatos_ver.php');
        
    }

}