<?php

require('../models/Usuario.class.php');

if(isset($_POST['entrar'])){

    $credencial = $_POST['credencial'];
    $senha = $_POST['senha'];

    $usuario = new Usuario();
    $usuario->autenticar($credencial, $senha); 

}

if(isset($_POST['cadastrar'])){

    $credencial = $_POST['credencial'];
    $senha = $_POST['senha'];
    $tipo_usuario = 'anonimo';
    
    $usuario = new Usuario();
    $usuario->cadastrar($credencial, $senha, $tipo_usuario); 
    
}