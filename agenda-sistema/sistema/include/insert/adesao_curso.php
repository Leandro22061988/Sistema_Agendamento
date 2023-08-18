<?php require_once('php/controle.php') ?>

<?php 

$nome = $_POST['nome'];
$id_al = $_POST['aluno'];
$tel = $_POST['telefone'];
$cel = $_POST['celular'];
$ema = $_POST['email'];
$cur = $_POST['curso'];
$val = $_POST['valor'];
$form = $_POST['forma'];
$parc = $_POST['parc'];
$vparc = $_POST['vparc'];
$ju = $_POST['juros'];
$pe = $_POST['periodo'];
$prof = $_POST['profissional'];
$id = $_POST['id_prof'];
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];


	$sqlc = "INSERT INTO adesao_curso (nome, id_aluno, telefone, celular, email, curso, valor, pagamento, parcelas, val_parcelas, juros, periodo, profissional, id_prof, dia, mes, ano) VALUES ('".$nome."', '".$id_al."', '".$tel."', '".$cel."', '".$ema."', '".$cur."', '".$val."', '".$form."', '".$parc."', '".$vparc."', '".$ju."', '".$pe."', '".$prof."', '".$id."', '".$dia."', '".$mes."', '".$ano."')";
	if($sql->query($sqlc) == true){
		header("location:../../contratos_adesao.php?id=$id_al&c=$cur");
	}else{
		header("location:../../contratos_adesao.php?erro=cad");
		//echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
	}

   
	
?>