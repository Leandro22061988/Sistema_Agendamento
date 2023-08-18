<?php require_once('php/controle.php') ?>
<?php 


$n = $_POST['nome'];
$v = str_replace(",",".",$_POST['valor']);
$t = $_POST['tempo'];
$f = $_POST['funcao'];
$id = $_POST["id"];


	$sqlc = "UPDATE servico SET nome='$n', valor='$v', tempo='$t', funcao='$f' WHERE id=$id ";
	if($sql->query($sqlc) === true){
		header("location:../../servicos.php?edit=ok");
	}else{
		echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
		//header("location:../../caixa.php?erro=edit");
	}
   
	
?>