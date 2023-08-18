<?php require_once('php/controle.php') ?>
<?php 
	
$id = $_GET["id"];
	
$sqli = "SELECT * FROM aluno WHERE id='$id'";
$exec = $sql->query($sqli);
$exibir = mysqli_fetch_assoc($exec);
	
$dir = unlink("../../img/alunos/".$exibir["foto"]."");

	if($dir == true){
		$img = "rlDefaultImg.jpg";
		
		$sqlc = "UPDATE aluno SET foto='$img' WHERE id=$id ";
			if($sql->query($sqlc) === true){
				header("location:../../cliente_c_detalhes.php?id=$id");
			}else{
				header("location:../../cliente_c_detalhes.php?id=$id&e=erro");
			}
	}else{
		//header("location:../../cliente_c.php?error=excluir");
		echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
	}
	
?>