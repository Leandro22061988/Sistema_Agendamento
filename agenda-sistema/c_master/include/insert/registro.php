<?php require_once('../../../connect/connect.php'); ?>
<?php include '../../../connect/function_er.php'; ?>
<?php 

    $n = $_GET["nome"];
    $e = $_GET["email"];
    $t = $_GET["tel"];
    $l = $_GET["login"];
    $s = md5($_GET["senha"]);


    $bUsl = $conn->prepare("SELECT * FROM alunos WHERE login='$l'");
    $bUsl->execute();
    $use = $bUsl->fetch(PDO::FETCH_ASSOC);
    
    if($use["login"]){
        header("location:../../registro.php?l=err");
    }else{
        $cad = "INSERT INTO alunos (nome, email, telefone, login, senha) VALUES ('".$n."', '".$e."', '".$t."', '".$l."', '".$s."')";
        $stmt = $conn->prepare($cad);
        if($stmt->execute()){
            header("location:../../login.php?l=$l");
        }else{
            set_error_handler("error_handler");
        }
    }
?>