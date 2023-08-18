<?php require_once('../../../connect/connect.php'); ?>
<?php include '../../../connect/function_er.php'; ?>
<?php 

    $au = $_POST["aula"];
    $ti = $_POST["tipo"];
    $va = str_replace(",", ".", $_POST["valor"]);


        $cad = "INSERT INTO tipo_aulas (descricao, tipo, preco) VALUES ('".$au."', '".$ti."', '".$va."')";
        $stmt = $conn->prepare($cad);
        if($stmt->execute()){
            header("location:../../aulas.php");
        }else{
            set_error_handler("error_handler");
        }
?>