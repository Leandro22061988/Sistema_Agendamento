<?php include '../../connect/connect.php'; ?>
<?php include '../../connect/function_er.php'; ?>
<?php 

	
		$s = md5($_POST['senha']);
		$e = $_POST['email'];
		
		$sqlp = $conn->prepare("UPDATE master SET senha = :SENHA WHERE email = :EMAIL");
        $sqlp->bindParam("SENHA", $s);
        $sqlp->bindParam("EMAIL", $e);
        if($sqlp->execute()){

            header("location:../login.php?edit=ok");
            
        }else{
            
             set_error_handler("erro_handler");
        }
		
	

?>