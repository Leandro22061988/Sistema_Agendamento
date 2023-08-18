<?php require_once('php/controle.php') ?>

<?php 


$p = $_POST['produto'];
$q = $_POST['quantidade'];
$val = str_replace(",",".",$_POST['valor']);
$soma = $val * $q;
$v = $soma;
$f = $_POST['fornecedor'];
$d = $_POST['dia'];
$m = $_POST['mes'];
$a = $_POST['ano'];



	$sqlc = "INSERT INTO estoque (produto, quantidade,valor_uni, valor_compra, fornecedor, dia, mes, ano) VALUES ('".$p."', '".$q."', '".$val."', '".$v."', '".$f."', '".$d."', '".$m."', '".$a."')";
	if($sql->query($sqlc) == true){
		header("location:../../estoque.php?cad=ok");
	}else{
		echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
		//header("location:../../gastos.php?erro=cad");
	}
   
	
?>