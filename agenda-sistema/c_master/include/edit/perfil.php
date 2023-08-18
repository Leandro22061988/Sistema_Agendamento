<?php require_once('../../../connect/connect.php'); ?>
<?php include '../../../connect/function_er.php'; ?>
<?php 

    $n = $_GET["nome"];
    $e = $_GET["email"];
    $t = $_GET["tel"];
    $i = $_GET["id"];


        $cad = "UPDATE master SET nome='$n', email='$e', celular='$t' WHERE id='$i'";
        $stmt = $conn->prepare($cad);
        if($stmt->execute()){
            header("location:../../perfil.php");
        }else{
            set_error_handler("error_handler");
        }
?>