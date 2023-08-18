<?php require_once('../../../connect/connect.php'); ?>
<?php include '../../../connect/function_er.php'; ?>
<?php 

    $st = $_GET["s"];
    $id = $_GET["ia"];


        $cad = "UPDATE agenda SET status='$st' WHERE id='$id'";
        $stmt = $conn->prepare($cad);
        if($stmt->execute()){
            header("location:../../financeiro.php");
        }else{
            set_error_handler("error_handler");
        }
?>