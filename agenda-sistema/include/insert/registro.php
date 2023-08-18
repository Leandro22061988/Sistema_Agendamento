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
    $s = md5($_GET["senha"]);


    $bUsl = $conn->prepare("SELECT * FROM cliente WHERE email='$em'");
    $bUsl->execute();
    $use = $bUsl->fetch(PDO::FETCH_ASSOC);
    
    if($use["email"]){
        header("location:../../registro.php?em=err&m=$em");
    }else{
        $cad = "INSERT INTO cliente (nome, email, telefone, celular, endereco, bairro, municipio, senha) VALUES ('".$no."', '".$em."', '".$te."', '".$ce."', '".$en."', '".$ba."', '".$mu."', '".$s."')";
        $stmt = $conn->prepare($cad);
        if($stmt->execute()){
            header("location:../../login.php?l=$em");
        }else{
            set_error_handler("error_handler");
        }
    }
?>