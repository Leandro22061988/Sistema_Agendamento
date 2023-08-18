<?php require_once('../../../connect/connect.php'); ?>
<?php include '../../../connect/function_er.php'; ?>
<?php 

    $dt = $_POST["data"];
    $en = $_POST["entrada"];
    $sa = $_POST["saida"];
    $lc = $_POST["local"];


        $cad = "INSERT INTO local (data, entrada, saida, local) VALUES ('".$dt."', '".$en."', '".$sa."', '".$lc."')";
        $stmt = $conn->prepare($cad);
        if($stmt->execute()){
            header("location:../../locais.php");
        }else{
            set_error_handler("error_handler");
        }
?>