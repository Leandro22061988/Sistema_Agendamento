<?php require_once('php/controle.php') ?>
<?php 


$d = $_POST['data'];
$c = $_POST['clientes'];
$g = $_POST['ganhos'];
$cu = $_POST['curso'];
$prom = $_POST['prom'];
$ga = $_POST['gastos'];
$co = $_POST['compras'];
$pro = $_POST['produtos'];
$l = $_POST['lucros'];
$s = $_POST['status'];
$id = $_POST["id"];


	$sqlc = "UPDATE checkout SET data='$d', clientes='$c', ganhos='$g', curso='$cu', prom_serv='$prom', gastos='$ga', compras='$co', produtos='$pro', lucro='$l', status='$s' WHERE id=$id ";
	if($sql->query($sqlc) === true){
		header("location:../../caixa.php?edit=ok");
	}else{
		echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
		//header("location:../../caixa.php?erro=edit");
	}
   
	
?>