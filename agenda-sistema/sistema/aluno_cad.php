<?php include './include/php/controle.php'; ?>

<?php 


$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$sex = $_POST['sexo'];
$nome = $_POST['nome'];
$tel = $_POST['telefone'];
$cel = $_POST['celular'];
$ema = $_POST['email'];
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];
$end = $_POST['endereco'];
$b = $_POST['bairro'];
$m = $_POST['municipio'];
$cep = $_POST['cep'];
$uf = $_POST['uf'];
$fo = $_FILES['foto']['name'];

//$s = md5($_POST['senha']);

		
		$sqlc = "INSERT INTO aluno (cpf, rg, sexo, nome, telefone, celular, email, dia, mes, ano, foto, endereco, bairro, municipio, cep, uf) VALUES ('".$cpf."', '".$rg."', '".$sex."', '".$nome."', '".$tel."', '".$cel."', '".$ema."', '".$dia."', '".$mes."', '".$ano."', '".$fo."', '".$end."', '".$b."', '".$m."', '".$cep."', '".$uf."')";
			if($sql->query($sqlc) == true){
				
				$diretorio = 'img/alunos/';
				if(move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$fo)){
					header("location:cliente_c.php?img=cad");
				}else{
					header("location:cliente_c.php?img=erro");
				}
				
			}else{
				echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
				//header("location:cliente_c.php?insert=erro");
			}
		
	
?>