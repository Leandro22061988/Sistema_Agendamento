<?php require_once('../../connect/connect.php'); ?>
<?php include '../../connect/function_er.php'; ?>
<?php 

    $no = $_GET["nome"];
    $em = $_GET["email"];
    $te = $_GET["tel"];
    $ce = $_GET["cel"];
    $en = $_GET["end"];
    $ba = $_GET["bairro"];
    $mu = $_GET["municipio"];
    $i = $_GET["id"];


        $cad = "UPDATE cliente SET nome='$no', email='$em', telefone='$te', celular='$ce', endereco='$en', bairro='$ba', municipio='$mu' WHERE id='$i'";
        $stmt = $conn->prepare($cad);
        if($stmt->execute()){
            header("location:../../perfil.php");
        }else{
            set_error_handler("error_handler");
        }
?>