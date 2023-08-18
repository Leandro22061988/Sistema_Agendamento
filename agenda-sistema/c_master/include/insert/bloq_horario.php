<?php require_once('../../../connect/connect.php'); ?>
<?php include '../../../connect/function_er.php'; ?>
<?php 

    $pr = $_POST["prof"]; 

    $di = $_POST["dia"];
    $me = $_POST["mes"];
    $an = $_POST["ano"];
    $hr = $_POST["hora"];
    $te = $_POST["tempo"];

    $se = $_POST["servico"];
    $vl = $_POST["valor"];

    $cl = $_POST["cliente"];
    $ic = $_POST["idc"];    
    $st = $_POST["status"];
    
    $bPrf = $conn->prepare("SELECT * FROM funcionario WHERE nome='$pr'");
    $bPrf->execute();
    $funcion = $bPrf->fetch(PDO::FETCH_ASSOC);
    $ip = $funcion["id"];

        $cad = "INSERT INTO agenda (nome, id_cliente, servico, valor, tempo, profissional, id_prof, horario, dia, mes, ano, status) VALUES ('".$cl."', '".$ic."', '".$se."', '".$vl."', '".$te."', '".$pr."', '".$ip."', '".$hr."', '".$di."', '".$me."', '".$an."', '".$st."')";
        $stmt = $conn->prepare($cad);
        if($stmt->execute()){
            header("location:../../horarios.php");
        }else{
            set_error_handler("error_handler");
        }
?>