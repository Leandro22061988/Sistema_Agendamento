<?php require_once('../../../connect/connect.php'); ?>
<?php include '../../../connect/function_er.php'; ?>
<?php 

    $au = $_POST["aula"];
    $ti = $_POST["tipo"];
    $va = str_replace(",", ".", $_POST["valor"]);
    $id = $_POST["id"];


        $cad = "UPDATE tipo_aulas SET descricao='$au', tipo='$ti', preco='$va' WHERE id='$id'";
        $stmt = $conn->prepare($cad);
        if($stmt->execute()){
            header("location:../../aulas.php");
        }else{
            set_error_handler("error_handler");
        }
?>