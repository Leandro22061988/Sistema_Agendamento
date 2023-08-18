<?php require_once('php/controle.php') ?>

<?php 


$n = $_POST['nome'];
$p = $_POST['periodo'];
$v = str_replace(",",".",$_POST['valor']);
$por = $_POST['porcentagem'];


	$sqlc = "INSERT INTO curso (nome, periodo, valor, porcentagem) VALUES ('".$n."', '".$p."', '".$v."', '".$por."')";
	if($sql->query($sqlc) == true){
		header("location:../../cursos.php?cad=ok");
	}else{
		header("location:../../cursos?erro=cad");
	}
   
	
?>