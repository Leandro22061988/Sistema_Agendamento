<?php require_once('php/controle.php') ?>
<?php 


$n = $_POST['nome'];
$p = $_POST['periodo'];
$v = str_replace(",",".",$_POST['valor']);
$por = $_POST['porcentagem'];
$id = $_POST["id"];


	$sqlc = "UPDATE curso SET nome='$n', periodo='$p', valor='$v', porcentagem='$por' WHERE id=$id ";
	if($sql->query($sqlc) === true){
		header("location:../../cursos.php?edit=ok");
	}else{
		echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
		//header("location:../../caixa.php?erro=edit");
	}
   
	
?>