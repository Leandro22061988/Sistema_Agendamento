<?php
session_start();

if (!isset($_SESSION["entrarlogin"]) && !isset($_SESSION["entrasenha"])) {

	return header("location:https://agenda.jc.inf.br/sistema/login.php?login=erro");

}

error_reporting(E_ALL & ~E_NOTICE);

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
?>
