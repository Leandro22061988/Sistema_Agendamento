<?php
session_start();
	
if (!isset($_SESSION["entrarlogin"]) && !isset($_SESSION["entrasenha"])) {
	
	return header("location:https://agenda.jc.inf.br/include/funcionario/login.php?login=erro");
  
}


?>
