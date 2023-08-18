<?php require_once('php/controle.php') ?>

<?php 


$d = $_POST['dia'];
$m = $_POST['mes'];
$a = $_POST['ano'];
$h = $_POST['hora_a'];
$v = str_replace(",",".",$_POST['valor']);
$r = $_POST['responsavel'];
$s = $_POST['status'];


	$sqla = "INSERT INTO checkout (dia, mes, ano, hora, valor, responsavel, status) VALUES ('".$d."','".$m."','".$a."','".$h."','".$v."','".$r."','".$s."')";
	if($sql->query($sqla) == true){
		header("location:../../caixa.php?st=aberto");
	}else{
		echo "ERRO: " .mysqli_error($sql);
		//header("location:../../caixa.php?erro=st");
	}
   
	
?>