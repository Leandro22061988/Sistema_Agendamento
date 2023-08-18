<?php require_once('../../../connect/connect.php'); ?>
<?php include '../../../connect/function_er.php'; ?>
<?php 

    $st = $_GET["s"];
    $id = $_GET["ia"];

    $pg = "Pendente";

    if($id == ""){
        header("location:../../financeiro.php?e=e");
    }else{
        $cad = "UPDATE agenda SET status='$dt' WHERE id_aluno='$id' and status='$pg'";
        $stmt = $conn->prepare($cad);
        if($stmt->execute()){
            header("location:../../financeiro.php");
        }else{
            set_error_handler("error_handler");
        }
    }
?>