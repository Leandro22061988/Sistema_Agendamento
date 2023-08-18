<?php include './include/php/controle.php'; ?>

<?php 



$id = $_POST['id'];
$fo = $_FILES['foto']['name'];

//$s = md5($_POST['senha']);

		
			$sqlc = "UPDATE aluno SET foto='$fo' WHERE id=$id ";
			if($sql->query($sqlc) == true){
				
				$diretorio = 'img/alunos/';
				if(move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$fo)){
					header("location:cliente_c_detalhes.php?id=$id&img=cad");
				}else{
					header("location:cliente_c_detalhes.php?id=$id&img=erro");
				}
				
			}else{
				echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
				//header("location:cliente_c.php?insert=erro");
			}
		
	
?>