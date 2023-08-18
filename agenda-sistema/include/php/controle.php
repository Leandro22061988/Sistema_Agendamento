<?php session_start(); ?>
<?php error_reporting(E_ALL && ~E_NOTICE); ?>
<?php 
    setlocale(LC_ALL, 'pt_BR', 'pt_BR.UTF-8', 'portuguese_brazil');
    date_default_timezone_set('America/Sao_Paulo');	    
?>
<?php include 'connect/connect.php'; ?>    
<?php include 'connect/restrict.php'; ?>
<?php 
    $idl =  $_SESSION["id"];
    $alu =  $_SESSION["nome"]
?>