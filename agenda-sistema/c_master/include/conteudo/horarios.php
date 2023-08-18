<p style="margin: 30px 0px 30px 0px;"></p>
 <div class="contener">
  <div class="row" style="padding: 10px 0px 10px 0px;">
    <div class="col-sm-8" style="margin-left: auto; margin-right: auto;">
        
        <p style="width: 80%; margin-left: auto; margin-right: auto;">
            <a href="index.php"><i class="fa fa-caret-left" aria-hidden="true" style="font-size: 50px; margin: 10px 0px 0px 0px;"></i></a>
        <span style="font-size: 40px; margin: 0px 0px 0px 20px; padding: 0px 0px 55px 0px;">Horários</span></p> 
        
        <!--Select Funções -->
        <p style="width: 80%; margin-left: auto; margin-right: auto;">
            <form name="agendamento" method="post" action="">
            <div class="form-group">
              <label for="sel1">Selecione o profissional:</label>
              <select class="form-control" id="sel1" name="funcao">
                <?php 
                    $bfuncao = $conn->prepare("SELECT * FROM funcionario ORDER BY nome");
                    $bfuncao->execute();
                    while($servico = $bfuncao->fetch(PDO::FETCH_ASSOC)){
                ?>
                <option><?php echo $servico["nome"]; ?></option>
                <?php } ?>
              </select>
            </div> 
             <div class="form-group">
              <label for="data">Data:</label>
              <input type="date" class="form-control" id="data" name="data">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Buscar</button>
         </form>
        </p>
        <!--/Select Funções -->
       <hr/>
       <p style="margin: 30px 0px 30px 0px;"></p>
       <?php 
        if($_POST["data"]){ 
            $pData0 = explode("-", $_POST["data"]);
            $pData2 = $pData0[2]."-".$pData0[1]."-".$pData0[0];
            $pData3 = strtotime($pData2);
            $BhOje = date("d-m-Y");
            $BhOje = strtotime($BhOje);
            
            if($pData3 < $BhOje){
            $BhOje = date("Y-m-d");
                
            $pData1 = explode("-", $BhOje);
            $pData = $pData1[2]."/".$pData1[1]."/".$pData1[0];
            $dia = $pData1[2];
            $mes = $pData1[1];
            $ano = $pData1[0];
            $horahoje = strtotime(date("H:i:s"));
            $datahoje = explode("/", date("d/m/Y"));
            }else{
            $pData1 = explode("-", $_POST["data"]);
            $pData = $pData1[2]."/".$pData1[1]."/".$pData1[0];
            $dia = $pData1[2];
            $mes = $pData1[1];
            $ano = $pData1[0];
            $horahoje = strtotime(date("H:i:s"));
            $datahoje = explode("/", date("d/m/Y"));
            }
       ?>
       <?php include './include/php/horaData.php'; ?>
       <p style="width: 95%; margin-left: auto; margin-right: auto; font-size: 14px; text-align: center; "><strong>Agenda:</strong> <?php echo $_POST["funcao"]; ?> - <?php echo $pData; ?> </p>
              
        <p style="width: 100%; margin-left: auto; margin-right: auto; font-size: 18px;">
            
            <?php include './include/php/agenda_horario.php'; ?>
            
        </p>
        <?php }else{ 
      ?>
       <p style="width: 95%; margin-left: auto; margin-right: auto; font-size: 14px; text-align: center; "><strong></strong> </p>
       <?php } ?>  
    </div>
  </div>