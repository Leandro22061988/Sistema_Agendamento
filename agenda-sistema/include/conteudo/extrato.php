<p style="margin: 30px 0px 30px 0px;"></p>
 <div class="contener">
  <div class="row" style="padding: 10px 0px 10px 0px;">
    <div class="col-sm-8" style="margin-left: auto; margin-right: auto;">
        
        <p style="width: 80%; margin-left: auto; margin-right: auto;">
            <a href="index.php"><i class="fa fa-caret-left" aria-hidden="true" style="font-size: 50px; margin: 10px 0px 0px 0px;"></i></a>
        <span style="font-size: 40px; margin: 0px 0px 0px 20px; padding: 0px 0px 55px 0px;">Extrato</span></p>
        
        <p style="width: 100%; margin-left: auto; margin-right: auto; font-size: 14px;">
            <p style="text-align: center;"><strong>Valores Pendentes</strong></p>
            <?php 
                $sEtr = "Agendado";
                $eXt = $conn->prepare("SELECT * FROM agenda WHERE id_cliente='$idl' and status='$sEtr'");
                $eXt->execute();
                while($extrato = $eXt->fetch(PDO::FETCH_ASSOC)){
                        $extCor = "<span style='color:red;'>".$extrato["status"]."</span>";                   
                    $dAt = $extrato["dia"]."/".$extrato["mes"]."/".$extrato["ano"];
            ?>
                <span class="exv" style="font-size: 14px;"><?php echo $dAt." - ".$extrato["servico"]." - R$ ".number_format($extrato["valor"],2,",",".") ?></span>
                
            <?php    
                }
            ?>
        </p>
        <p style="width: 100%; margin-left: auto; margin-right: auto; font-size: 18px;">         
            
        </p>        
    </div>
  </div>