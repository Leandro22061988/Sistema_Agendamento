<p style="margin: 30px 0px 30px 0px;"></p>
 <div class="contener">
  <div class="row" style="padding: 10px 0px 10px 0px;">
        <div class="col-sm-8" style="margin-left: auto; margin-right: auto;">        
            <p style="width: 80%; margin-left: auto; margin-right: auto;">
                <a href="index.php"><i class="fa fa-caret-left" aria-hidden="true" style="float: left; font-size: 50px; margin: 0px 0px 0px 0px;"></i></a>
            <span style="float: left; font-size: 24px; margin: 15px 0px 0px 20px; padding: 0px 0px 0px 0px;">Minha agenda</span></p>
        </div>
        
       <p style="width: 98%; margin-left: auto; margin-right: auto; font-size: 14px;">
            <?php 
           
                $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
                $blo = $conn->prepare("SELECT * FROM agenda WHERE id_cliente='$idl'");
                $blo->execute();
                $tHor = $blo->rowCount();
                $qt_pg = 3;
                $num_pg = ceil($tHor/$qt_pg);
                $inicio = ($qt_pg*$pagina)-$qt_pg;
           
           
                $sEtr = "Pendente";
                $eXt = $conn->prepare("SELECT * FROM agenda WHERE id_cliente='$idl' ORDER BY id DESC LIMIT $inicio, $qt_pg ");
                $eXt->execute();
                while($agenda = $eXt->fetch(PDO::FETCH_ASSOC)){
                    
            ?>
                <span class="loc">
                    <?php echo "
                        <strong>Serviço: </strong> ".$agenda["servico"]." <br/>
                        <strong>Profissional: </strong> ".$agenda["profissional"]." <br/>
                        <strong>Data: </strong> ".$agenda["dia"]."/".$agenda["mes"]."/".$agenda["ano"]." <br/>
                        <strong>Hora: </strong> ".$agenda["horario"]." <br/> 
                        <strong>Valor: </strong> R$ ".number_format($agenda["valor"],2,",",".")." <br/>
                        <strong>Status: </strong> ".$agenda["status"]." <br/> 
                        ";
                    ?>
                    
                </span>
                
            <?php    
                }
           
                $anterior = $pagina - 1;
                $proximo = $pagina + 1;
                $maxlink = 2;
            ?>
          <?php if($tHor != 0){ ?>
          <ul class="pagination" style="margin-left: auto; margin-right: auto;">
              <?php if($anterior != 0){ ?>                  
                      <li class="page-item"><a class="page-link" href="agenda.php?pagina=<?php echo $anterior; ?>">Anterior</a></li>
              <?php }else{ ?>
                  <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
              <?php } ?>
              
              
              <?php if($proximo <= $num_pg){ ?>
                  <li class="page-item"><a class="page-link" href="agenda.php?pagina=<?php echo $proximo; ?>">Próximo</a></li>
              <?php }else{ ?>
                  <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
              <?php } ?>
            </ul> 
         <?php }else{} ?>
        </p>
         
    
     </div>
  </div>