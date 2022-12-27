<?php
session_start();
 if($_SESSION['logado']!=true){
    header('Location:../pages/login.php');
    die();
 }

 if(isset($_GET['sair'])){
    session_destroy();
    header('Location:../pages/login.php');
    die();
 }