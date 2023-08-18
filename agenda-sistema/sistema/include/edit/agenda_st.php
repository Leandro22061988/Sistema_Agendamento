<?php require_once('php/controle.php') ?>
<?php 


$s = $_POST['status'];
$id = $_POST['id'];
$f = $_POST['id_prof'];


	$sqlc = "UPDATE agenda SET status='$s' WHERE id=$id ";
	if($sql->query($sqlc) === true){
		header("location:../../agenda_func_st_retorno.php?id=$f");
	}else{
		header("location:../../agenda_func_st.php?st=erro");
	}
   
	
?>