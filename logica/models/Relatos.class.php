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
    public function listarRelatos() {
        $pdo = new PDO("mysql:host=localhost;dbname=equalize", "root", "");
        $sql = "SELECT r.id_relato, u.nome, r.relato 
                FROM relatos r 
                INNER JOIN usuarios u ON r.id_usuario = u.id_usuario 
                ORDER BY r.id_relato DESC"; // Ordem do mais recente para o mais antigo

        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function disponibilizarRelato($id_relato) {
        $pdo = new PDO("mysql:host=localhost;dbname=equalize", "root", "");
        $sql = "UPDATE table relatos SET disponibilizado = 1 WHERE id_relato = :id_relato";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id_relato', $id_relato, PDO::PARAM_INT);
        $stmt->execute();
    }

}