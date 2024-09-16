<?php

class Usuario{

    public function autenticar($credencial, $senha){
        $pdo = new PDO("mysql:host=localhost;dbname=equalize", "root", "");
        $query = "select * from usuarios where :credencial = credencial and :senha = senha";
        $result = $pdo->prepare($query);
        $result->bindValue(":credencial", $credencial);
        $result->bindValue(":senha", $senha);
        $result->execute();

        $consulta = $result->rowCount();
        
        if($consulta>0){
            session_start();
            foreach($result as $value){
            $_SESSION['tipo_usuario'] = $value['tipo_usuario'];
            $_SESSION['id_usuario'] = $value['id_usuario'];
            }
            header('location:../controllers/ControllerLogin.php?opc=1');
        }else{
            header('location:../../views/pages/autenticacao/error_login.php');
        }

    }

    public function cadastrar($credencial, $senha, $tipo_usuario){
        $pdo = new PDO("mysql:host=localhost;dbname=equalize", "root", "");
        $query = "INSERT INTO usuarios (credencial, senha, tipo_usuario) values (:credencial, :senha, :tipo_usuario)";
        $result = $pdo->prepare($query);
        $result->bindValue(":credencial", $credencial);
        $result->bindValue(":senha", $senha);
        $result->bindValue(":tipo_usuario", $tipo_usuario);
        $result->execute();

        header('location:../../views/pages/autenticacao/login.php');
        
    }

}