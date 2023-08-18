<?php require_once('php/controle.php') ?>
<?php 


$g = $_POST['ganhos'];
$c = $_POST['curso'];
$prom = $_POST["prom"];
$gas = $_POST['gastos'];
$comp = $_POST['compras'];
$pro = $_POST['produtos'];
$id = $_POST["id"];

	$l1 = $g + $c + $pro + $prom;
	$l2 = $l1 - $gas - $comp;


	$sqlc = "UPDATE checkout SET ganhos='$g', curso='$c', gastos='$gas', compras='$comp', produtos='$pro', lucro='$l2' WHERE id=$id ";
	if($sql->query($sqlc) === true){
		header("location:../../historico.php?edit=ok");
	}else{
		echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
		//header("location:../../caixa.php?erro=edit");
	}
   
	
?>