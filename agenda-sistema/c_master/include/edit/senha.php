<?php require_once('../../../connect/connect.php'); ?>
<?php include '../../../connect/function_er.php'; ?>
<?php 

    $s = md5($_GET["senha"]);
    $i = $_GET["id"];


        $cad = "UPDATE master SET senha='$s' WHERE id='$i'";
        $stmt = $conn->prepare($cad);
        if($stmt->execute()){
            header("location:../../perfil.php");
        }else{
            set_error_handler("error_handler");
        }
?>