<?php require_once('../../connect/connect.php'); ?>
<?php include '../../connect/function_er.php'; ?>
<?php 

    $cl = $_GET["c"];
    $ci = $_GET["ci"];
    $ct = $_GET["ct"];
    $cc = $_GET["cc"];
    $ce = $_GET["ce"];

    $se = $_GET["s"];    
    $va = $_GET["v"];
    $te = $_GET["t"];
    $si = $_GET["si"];

    $pr = $_GET["p"];
    $ip = $_GET["i"];

    $hr = $_GET["h"];
    
    $di = $_GET["d"];
    $me = $_GET["m"];
    $an = $_GET["a"];    
    
    $st = "Agendado";
  
	//////////////////////////////////////////////////////////////////////

    $bsob = $conn->prepare("SELECT * FROM sobra WHERE id_cliente='$ci'");
    $bsob->execute();
    $fsob = $bsob->fetch(PDO::FETCH_ASSOC);
    $psob = $fsob["pontos"];

    $sqlib = $conn->prepare("SELECT SUM(pontos) as SOMA FROM agenda WHERE id_cliente='$ci'");
    $sqlib->execute();
    $contb = $sqlib->rowCount();
    $exibi = $sqlib->fetch(PDO::FETCH_ASSOC);

    if($exibi["SOMA"] < 1 && $psob < 1){
        $exibi["SOMA"] = 0;
        $s = $exibi["SOMA"];
    }else{
        $s = $exibi["SOMA"] + $psob;
    }

    $sqlid = $conn->prepare("SELECT * FROM cliente WHERE id='$ci'");
    $sqlid->execute();
    $olha = $sqlid->fetch(PDO::FETCH_ASSOC);
	
	///////////////////////////////////////////////////////////////////

    $sqli = $conn->prepare("SELECT * FROM servico WHERE id='$si'");
    $sqli->execute();
    $mserv = $sqli->fetch(PDO::FETCH_ASSOC);
	
    $sqlia = $conn->prepare("SELECT * FROM fidelidade WHERE servico='$se'");
    $sqlia->execute();
    $fi = $sqlia->fetch(PDO::FETCH_ASSOC);

    $sqlid = $conn->prepare("SELECT SUM(pontos) as SOMA, id_cliente FROM expira_pontos WHERE id_cliente='$ci'");
    $sqlid->execute();
    $contd = $sqlid->rowCount();
    $exib = $sqlid->fetch(PDO::FETCH_ASSOC);

    if($exib["SOMA"] < 1){
        $exib["SOMA"] = 0;
        $va = $exibi["SOMA"];
    }else{
        $va = $exib["SOMA"];
    }

    //Verificando se o serviço esta cadastrado
    if($fi["servico"]){
        $bPra = $conn->prepare("SELECT * FROM prazo_pontos");
        $bPra->execute();
        $prazo = $bPra->fetch(PDO::FETCH_ASSOC);
        $vpr = $prazo["prazo"];
        $pt = $fi["pontos"];
        
        $f = date('d/m/Y', strtotime('+'.$vpr.' days', strtotime($di.'-'.$me.'-'.$an)));
		$sep = explode("/", $f);
		$d = $sep[0];
		$m = $sep[1];
		$a = $sep[2];
        
     ?>

        <h3>Deseja que os pontos do serviço atual expirem </h3>
        <h5>Cliente <strong><?php echo $olha["nome"]; ?></strong> tem <strong><?php echo $s; ?> pontos</strong> de fidelidade. </h5>
        <h5>O serviço que esta preste a agendar somará para o cliente <strong>+ <?php echo $fi["pontos"]; ?> pontos</strong>.</h5>
        <h5>Total de pontos para expirar: <strong><?php echo $va; ?> pontos</strong></h5>	

    <?php }else{ ?>
        <h3>Esse serviço não esta registrado no programa de fidelidade.</h3>
        <h5>O cliente não receberá pontos. </h5>
    <?php } ?>

