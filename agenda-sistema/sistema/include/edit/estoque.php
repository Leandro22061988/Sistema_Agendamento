<?php require_once('php/controle.php') ?>
<?php 


$p = $_POST['produto'];
$q = $_POST['quantidade'];
$v = str_replace(",",".",$_POST['valor']);
$f = $_POST['fornecedor'];
$id = $_POST["id"];


	$sqlc = "UPDATE estoque SET produto='$p', quantidade='$q', valor_compra='$v', fornecedor='$f' WHERE id=$id ";
	if($sql->query($sqlc) === true){
		header("location:../../estoque.php?edit=ok");
	}else{
		echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
		//header("location:../../caixa.php?erro=edit");
	}
   
	
?>