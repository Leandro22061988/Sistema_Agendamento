<?php 
	if($_POST["tab"] == "Cliente"){
		header("location:config_cliente_tab_col.php");
	}elseif($_POST["tab"] == "Estoque"){
		header("location:config_estoque_tab_col.php");
	}elseif($_POST["tab"] == "Caixa"){
		header("location:config_checkout_tab_col.php");
	}
?>