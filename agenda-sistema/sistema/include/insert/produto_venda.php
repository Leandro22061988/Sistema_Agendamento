<?php 
session_start();
require_once('php/controle.php') ?>

<?php 
foreach($_SESSION["dados"] as $produtos){
$idpro = $produtos["id"];	
$cli = $produtos['cliente'];
$ven = $produtos['vendedor'];
$pro = $produtos['produto'];
$val = $produtos['valor'];
$desc = $produtos['desconto'];
$quant = $produtos['quantidade'];
$pg = $produtos['pagamento'];

	
if($produtos["cardf"]){
	$parc = $produtos['parcelas'];
	$vparc = $produtos['val_parcelas'];
	$juros = $produtos['juros'];
	$card = $produtos['cardf'];
}else{
	$card = "";
	$parc = "0";
	$vparc = "";
	$juros = "";
}
$pgf = $produtos['pgforma'];
$dia = $produtos['dia'];
$mes = $produtos['mes'];
$ano = $produtos['ano'];
$obs = $produtos['obs'];
	
$cod = $produtos['cod'];
$venc = $produtos['vencimento'];
$paga = $produtos['paga'];


$pro = $produtos['produto'];
$sqlia = "SELECT * FROM produto WHERE nome='$pro'";
$execa = $sql->query($sqlia);
$exiba = mysqli_fetch_assoc($execa);

if($exiba["quantidade"] < 1){
	header("location:../../produto.php?est=zero&p=$pro");
}else{

	$sqlc = "INSERT INTO produto_venda (cliente, vendedor, produto, valor, desconto, quantidade, pagamento, parcelas, val_parcelas, juros, pgforma, cardf, dia, mes, ano) VALUES ('".$cli."', '".$ven."', '".$pro."', '".$val."', '".$desc."', '".$quant."', '".$pg."', '".$parc."', '".$vparc."', '".$juros."', '".$pgf."', '".$card."', '".$dia."', '".$mes."', '".$ano."')";
	if($sql->query($sqlc) == true){
		
		if($produtos['pgforma'] == "a prazo"){
		
			$sqlp = "INSERT INTO promissioria (codigo, cliente, produto, valor, parcela, vencimento) VALUES ('".$cod."', '".$cli."', '".$pro."', '".$vparc."', '".$parc."', '".$venc."')";
			if($sql->query($sqlp) == true){

				$pro = $produtos['produto'];
				$sqli = "SELECT * FROM produto WHERE nome='$pro'";
				$exec = $sql->query($sqli);
				$exibir = mysqli_fetch_assoc($exec);

				$id = $exibir["id"];
				$n = $exibir["quantidade"];
				$cal = $n - $quant;


				$sqlc = "UPDATE produto SET quantidade='$cal' WHERE id='$id' ";
				if($sql->query($sqlc) === true){

						unset($_SESSION["iten"][$idpro]);

					header("location:../../produto_vendas_promissorias.php?edit=ok");

				}else{
					echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
					//header("location:../../caixa.php?erro=edit");
				}
			}
		}else{
			
			$pro = $produtos['produto'];
			$sqli = "SELECT * FROM produto WHERE nome='$pro'";
			$exec = $sql->query($sqli);
			$exibir = mysqli_fetch_assoc($exec);

			$id = $exibir["id"];
			$n = $exibir["quantidade"];
			$cal = $n - $quant;


			$sqlc = "UPDATE produto SET quantidade='$cal' WHERE id='$id' ";
			if($sql->query($sqlc) === true){

					unset($_SESSION["iten"][$idpro]);

				header("location:../../produto_vendas.php?edit=ok");
				
			}else{
				echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
				//header("location:../../caixa.php?erro=edit");
			}
		}
		
		
		
	}else{
		//header("location:../../produto.php?erro=cad");
		echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
	}
   
}
}
?>