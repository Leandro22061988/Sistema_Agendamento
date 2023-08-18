<?php require_once('php/controle.php') ?>

<?php 


$nome = $_POST['nome'];
$val = str_replace(",",".",$_POST['valor']);
$t = $_POST['tempo'];
$f = $_POST['funcao'];



	$sqlc = "INSERT INTO servico (nome, valor, tempo, funcao) VALUES ('".$nome."', '".$val."', '".$t."', '".$f."')";
	if($sql->query($sqlc) == true){
		header("location:../../servicos.php?cad=ok");
	}else{
		header("location:../../servicos.php?erro=cad");
	}
   
	
?>