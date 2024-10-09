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
        $sql = "SELECT relatos.id_relato, usuarios.nome, relatos.relato, relatos.data, relatos.horario, relatos.disponibilizado
                FROM relatos 
                INNER JOIN usuarios ON relatos.id_usuario = usuarios.id_usuario 
                ORDER BY relatos.id_relato DESC";

        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listarRelatosDisp() {
        $pdo = new PDO("mysql:host=localhost;dbname=equalize", "root", "");
        $sql = "SELECT usuarios.nome, relatos.relato
                FROM relatos 
                INNER JOIN usuarios ON relatos.id_usuario = usuarios.id_usuario AND relatos.disponibilizado = 1
                ORDER BY relatos.id_relato DESC";

        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listarRelatoPorId($id_relato) {
        $pdo = new PDO("mysql:host=localhost;dbname=equalize", "root", "");
        $sql = "SELECT * FROM relatos WHERE id_relato = :id_relato";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id_relato', $id_relato, PDO::PARAM_INT);
        $stmt->execute();
    
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }    

    public function mostrarRelato($id_relato) {
        $pdo = new PDO("mysql:host=localhost;dbname=equalize", "root", "");
        $sql = "UPDATE relatos SET disponibilizado = 1 WHERE id_relato = :id_relato";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id_relato', $id_relato, PDO::PARAM_INT);
        $stmt->execute();
        return true;
    }

    public function ocultarRelato($id_relato) {
        $pdo = new PDO("mysql:host=localhost;dbname=equalize", "root", "");
        $sql = "UPDATE relatos SET disponibilizado = 0 WHERE id_relato = :id_relato";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id_relato', $id_relato, PDO::PARAM_INT);
        $stmt->execute();
        return true;
    }

}