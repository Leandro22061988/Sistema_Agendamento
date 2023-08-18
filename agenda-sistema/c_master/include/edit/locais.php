<?php require_once('../../../connect/connect.php'); ?>
<?php include '../../../connect/function_er.php'; ?>
<?php 

    $dt = $_POST["data"];
    $en = $_POST["entrada"];
    $sa = $_POST["saida"];
    $lc = $_POST["local"];
    $id = $_POST["id"];


        $cad = "UPDATE local SET data='$dt', entrada='$en', saida='$sa', local='$lc' WHERE id='$id'";
        $stmt = $conn->prepare($cad);
        if($stmt->execute()){
            header("location:../../locais.php");
        }else{
            set_error_handler("error_handler");
        }
?>