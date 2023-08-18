<?php 
    try{
        $conn = new PDO("mysql:dbname=jcinfbr_agenda;host=localhost;port=3306;charset=utf8;", "jcinfbr_agenda", "Pag@2015");
    }catch(PDOException $eR){
        echo "Não foi possível fazer a conexão com banco de dados".$eR->getMessage();
    }

    $dominio = "https://agenda.jc.inf.br/";
    $emailMasterServidor = "admin@jacycordeiro.com.br";
?>