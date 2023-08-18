<?php require_once('php/controle.php') ?>
<?php 


$v = 0;
$s = "Cancelado";
$id = $_POST["id"];


	
	$sqli = "SELECT * FROM agenda WHERE status='$s' and id_cliente='$id' and pontos >= 1";
	$exec = $sql->query($sqli);
	$mostra = mysqli_fetch_assoc($exec);

	if($mostra["status"]){
		
		$d = $mostra["dia"];
		$m = $mostra["mes"];
		$a = $mostra["ano"];
		$se = $mostra["servico"];
		
		$sqlc = "UPDATE agenda SET pontos='$v' WHERE status='$s' and id_cliente='$id' and pontos >= 1";
		if($sql->query($sqlc) === true){
			
			$delete = "DELETE FROM expira_pontos WHERE id_cliente=$id and dia='$d' and mes='$m' and ano='$a' and servico='$se'";
			if($exc = $sql->query($delete)){
				header("location:../../fidelidade.php?edit=ok");
			}
			
		}else{
			header("location:../../fidelidade.php?aps=r");
		}
   }else{
			header("location:../../fidelidade.php?st=dif");
		}
	
?>