<?php 
$id = $_POST["id"];
$cu = $_POST["c"];
$emp = "SELECT * FROM empresa";
$exep = $sql->query($emp);
$contemp = mysqli_num_rows($exp);
$exibemp = mysqli_fetch_assoc($exp);

$alun = "SELECT * FROM aluno WHERE id='$id'";
$exeal = $sql->query($alun);
$contal = mysqli_num_rows($exeal);
$exibal = mysqli_fetch_assoc($exeal);

$sqli = "SELECT * FROM contrato WHERE curso='$cu'";
$exec = $sql->query($sqli);
$cont = mysqli_num_rows($exec);
$exibir = mysqli_fetch_assoc($exec);
?>

<div class="container" style="background-color: #fff;">
<div class="row" style="padding: 20px 0px 0px 10px;">

<fieldset>
<legend><strong>CONTRATADA</strong></legend>

<div class="media">
<div class="media-left">
<img src="img/alunos/'.$exibal["foto"].'" class="media-object" style="width:140px">
</div>
<div class="media-body">
<h4 class="media-heading">'.$exibal["nome"].'</h4>
<br/>
<div class="col-sm-6">';
<p><strong>CPF: </strong>'.$exibal["cpf"].'</p>
<p><strong>RG: </strong>'.$exibal["rg"].'</p>
<p><strong>Telefone: </strong>'.$exibal["telefone"].'</p>
<p><strong>Celular: </strong>'.$exibal["celular"].'</p>
<p><strong>E-mail: </strong>'.$exibal["email"].'</p>
<p><strong>Data de Nescimento: </strong>'.$exibal["dia"].'/'.$exibal["mes"].'/'.$exibal["ano"].'</p>
</div>';
<div class="col-sm-6">
<p><strong>Endereço: </strong>'.$exibal["endereco"].'</p>
<p><strong>Bairro: </strong>'.$exibal["bairro"].'</p>
<p><strong>CEP: </strong>'.$exibal["cep"].'</p>
<p><strong>Estado: </strong>'.$exibal["uf"].'</p>
</div>

</div>

</div>
</fieldset>
<hr>
<fieldset>
<legend><strong>CONTRATANTE</strong></legend>

<div class="media">
<div class="media-body">
<div class="col-sm-6">
<p><strong>Empresa: </strong>'.$exibemp["cpf"].'</p>
<p><strong>CNPJ: </strong>'.$exibemp["rg"].'</p>
<p><strong>Telefone: </strong>'.$exibemp["telefone"].'</p>
</div>
<div class="col-sm-6">
<p><strong>Endereço: </strong>'.$exibemp["endereco"].'</p>
<p><strong>Bairro: </strong>'.$exibemp["bairro"].'</p>
<p><strong>Municipio: </strong>'.$exibemp["municipio"]</p>
<p><strong>Estado: </strong>$exibemp["uf"]</p>
</div>

</div>

</div>
</fieldset>
<hr>

<fieldset><legend><strong>CONTRATO</strong></legend>$exibir["contrato"]</fieldset>

</div>
</div>
	