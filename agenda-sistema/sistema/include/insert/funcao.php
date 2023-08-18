<?php require_once('php/controle.php') ?>

<?php 


$func = $_POST['nome'];
$sal = str_replace(",",".",$_POST['salario']);
$porc = $_POST['porcentagem'];



	$sqlc = "INSERT INTO funcao (funcao, salario, porcentagem) VALUES ('".$func."', '".$sal."', '".$porc."')";
	if($sql->query($sqlc) == true){
		header("location:../../admin_funcoes.php?cad=ok");
	}else{
		header("location:../../admin_funcoes?erro=cad");
	}
   
	
?>