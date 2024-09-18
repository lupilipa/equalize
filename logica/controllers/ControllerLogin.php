<?php

require('../models/Usuario.class.php');

if(isset($_GET['opc'])){

    $opc = $_GET['opc'];

    switch($opc){
        case 1:
            session_start();
            if($_SESSION['tipo_usuario'] == "admin"){
                header("location:../../views/pages/admin/home_adm.php");
            }else{
                header("location:../../views/pages/anonimo/home_anonimo.php");
            }
    }

}

if(isset($_GET['logout'])){
    
    session_abort();
    header("location:../../views/index.php");

}