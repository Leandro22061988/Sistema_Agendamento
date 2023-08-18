<?php require_once('php/controle.php') ?>

<?php 


$s = $_POST['serv'];
$p = $_POST['ponto'];



	$sqlc = "INSERT INTO premio (premio, pontos) VALUES ('".$s."', '".$p."')";
	if($sql->query($sqlc) == true){
		header("location:../../fid_premio.php?cad=ok");
	}else{
		header("location:../../fid_premio.php?erro=cad");
	}
   
	
?>