<?php include '../salao.php'; ?>
<?php 

	
		$s = md5($_POST['senha']);
		$e = $_POST['email'];
		
		$sqlp = "UPDATE master SET senha='$s' WHERE email='$e'";
		
	if($sql->query($sqlp) === true){
		
		header("location:../../login.php?edit=ok");
	}else{
		echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
		//header("location:../../login.php?edit=erro");
	}
		
	

?>