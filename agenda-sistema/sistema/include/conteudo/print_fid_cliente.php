<?php

$id = $_GET["id"];
$sqli = "SELECT SUM(pontos) as SOMA, nome, id_cliente FROM agenda WHERE id_cliente='$id'";
$exec = $sql->query($sqli);
$cont = mysqli_num_rows($exec);
$exibir = mysqli_fetch_assoc($exec);

$sb = "SELECT SUM(pontos) as SOMA, id_cliente FROM sobra WHERE id_cliente='$id'";
$exsb = $sql->query($sb);
$vsb = mysqli_fetch_assoc($exsb);

$sobra = $vsb["SOMA"];
$junta = $exibir["SOMA"] + $sobra;

$em = "SELECT * FROM empresa ";
$exem = $sql->query($em);
$verem = mysqli_fetch_assoc($exem);

$nome = $exibir['nome'];
$id_c = $exibir['id_cliente'];
$pont = $junta;
$adm = $_SESSION["nomeadm"];
$id_adm = $_SESSION["idadmin"];
$dat = date('Y-m-d H:i');

$sqlc = "INSERT INTO historico_print (cliente, id_cliente, pontos, admin, id_admin, datahora) VALUES ('".$nome."', '".$id_c."', '".$pont."', '".$adm."', '".$id_adm."', '".$dat."')";
	if($sql->query($sqlc) == true){

?>

		<p class="no"><?php echo $exibir["nome"]; ?></p>
		<p class="ti">Seus Pontos de Fidelidade:</p>
		<h2><?php echo $junta; ?></h2>
		<p class="dat">Data da impressão: <?php date_default_timezone_set('America/Sao_Paulo'); echo date('d/m/Y'); ?></p>
		<p class="dat"><?php echo $verem["nome"]; ?></p>
		<p class="dat"><?php echo $verem["endereco"]; ?> - <?php echo $verem["bairro"]; ?></p>

		<p class="dat"><?php echo $verem["telefone"]; ?> </p>

<?php 
							   
	}else{
		echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
		//header("location:../../cliente.php?erro=cad");
	}
 ?>