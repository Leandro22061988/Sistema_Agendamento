<?php 
    include("include/php/horaData.php");    
?>

<p style="margin: 30px 0px 30px 0px;"></p>  

 <div class="contener">
  <div class="row" style="padding: 10px 0px 10px 0px;">
    <div class="col-sm-8" style="margin-left: auto; margin-right: auto;">
        
        <p style="width: 80%; margin-left: auto; margin-right: auto;">
            <a href="index.php"><i class="fa fa-caret-left" aria-hidden="true" style="font-size: 50px; margin: 10px 0px 0px 0px;"></i></a>
        <span style="font-size: 40px; margin: 0px 0px 0px 20px; padding: 0px 0px 55px 0px;">Extrato</span></p>
        
        
        
        <p style="width: 100%; margin-left: auto; margin-right: auto;">
            
            <?php if($dhoje <= $dontem){ ?> 
            <a href="extrato.php?re=<?php echo $dAt; ?>"><i class="fa fa-caret-left" aria-hidden="true" style="width: 10%; float: left; font-size: 50px; margin: 10px 0px 0px 0px;"></i></a>
            <?php }else{ ?>
             <a href="extrato.php?re=<?php echo $dAt; ?>"><i class="fa fa-caret-left" aria-hidden="true" style="width: 10%; float: left; font-size: 50px; margin: 10px 0px 0px 0px;"></i></a>
            <?php } ?>
            
            <span style="width: 80%; text-align: center; float: left; margin: 30px 0px 0px 0px;"><?php echo $dAt." - ".$dd["$diDa"]; ?></span>
            
            <?php if($dhoje <= $dontem){ ?> 
            <a href="extrato.php?e=<?php echo $dAt; ?>">
                <i class="fa fa-caret-right" aria-hidden="true" style="width: 10%; float: right; font-size: 50px; margin: 10px 0px 0px 0px;"></i></a>
            <?php }else{ ?>
            <a href="extrato.php?e=<?php echo $dAt; ?>">
                <i class="fa fa-caret-right" aria-hidden="true" style="width: 10%; float: right; font-size: 50px; margin: 10px 0px 0px 0px;"></i></a>
            <?php } ?>
            
        </p>
        
        <p style="width: 100%; margin-left: auto; margin-right: auto; font-size: 14px;">
        <button type="button" class="btn btn-link btn-block" data-toggle="collapse" data-target="#demo">Ver todos valores pendentes</button>

        <div id="demo" class="collapse">
        <?php 
                $sEtr = "Pendente";
                $eXt = $conn->prepare("SELECT * FROM agenda WHERE status='$sEtr'");
                $eXt->execute();
                while($extrato = $eXt->fetch(PDO::FETCH_ASSOC)){
                    
                    if($extrato["status"] == "Pendente"){
                        $extCor = "<span style='color:red;'>".$extrato["status"]."</span>";
                    }else{
                        $extCor = "<span style='color:blue;'>".$extrato["status"]."</span>";
                    }
            ?>
                <span class="exv" style="font-size: 14px;"><?php echo $extrato["data"]." - ".$extrato["hora"]." - R$ ".number_format($extrato["valor"],2,",",".")." - ".$extCor; ?></span>
                
            <?php    
                }
            ?>
        </div> 
        </p>
        
        <p style="width: 100%; margin-left: auto; margin-right: auto; font-size: 14px;">
            <?php 
                $sEtr = "Pendente";
                $eXt = $conn->prepare("SELECT * FROM agenda WHERE data='$dAt' and status='$sEtr'");
                $eXt->execute();
                while($extrato = $eXt->fetch(PDO::FETCH_ASSOC)){
                    
                    if($extrato["status"] == "Pendente"){
                        $extCor = "<span style='color:red;'>".$extrato["status"]."</span>";
                    }else{
                        $extCor = "<span style='color:blue;'>".$extrato["status"]."</span>";
                    }
            ?>
                <span class="exv"><?php echo $extrato["data"]." - ".$extrato["hora"]." - R$ ".number_format($extrato["valor"],2,",",".")." - ".$extCor; ?></span>
                
            <?php    
                }
            ?>
        </p>
        <p style="width: 100%; margin-left: auto; margin-right: auto; font-size: 18px;">
            
           
            
        </p>
        
    </div>
  </div>