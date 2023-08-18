<p style="margin: 30px 0px 30px 0px;"></p>  
<div class="container">
  <p style="width: 100%; margin-left: auto; margin-right: auto;">
      <a href="horarios.php">
        <i class="fa fa-caret-left" aria-hidden="true" style="width: 10%; float: left; font-size: 50px; margin: 10px 0px 0px 0px;"></i></a>
        <span style="width: 85%; float: left; font-size: 30px; margin: 0px 0px 40px 0px; padding: 20px 0px 20px 20px;">Agendamento</span>
   </p>
    <p style="width: 100%; float: left; margin: 0px 0px 30px 0px;">
      <?php
         $dAu = $_GET["i"];
         $hAu = $_GET["h"];
        
         $bag = $conn->prepare("SELECT * FROM agenda WHERE id='$dAu'");
         $bag->execute();
         $agenda = $bag->fetch(PDO::FETCH_ASSOC);
         $qReg = $bag->rowCount();
        
      ?>
  <?php if($qReg < 1){ ?>
       <strong>DATA: <?php echo $_GET["d"]."/".$_GET["m"]."/".$_GET["a"]; ?></strong>
  <?php }else{ ?>
      <strong>Cliente:</strong> <?php echo $agenda["nome"]; ?> <br/>
      <strong>Serviço:</strong> <?php echo $agenda["servico"]; ?> <br/>
      <strong>Profissional:</strong> <?php echo $agenda["profissional"]; ?> <br/>
      <strong>Data:</strong> <?php echo $agenda["dia"]."/".$agenda["mes"]."/".$agenda["ano"]; ?> <br/>
      <strong>Horario:</strong> <?php echo $agenda["horario"]; ?> <br/>
      <strong>Valor:</strong> R$ <?php echo number_format($agenda["valor"],2,",","."); ?> <br/>
      <strong>Status:</strong> <?php echo $agenda["status"]; ?> <br/>
    <?php } ?>
  </p>
  <?php if($qReg < 1){ ?>
  <form name="cadastro" method="post" action="include/insert/bloq_horario.php">
      <div class="form-group">
          <label for="sel1">Profissional:</label>
          <input type="text" class="form-control" id="prof" name="prof" value="<?php echo $_GET["f"]; ?>" required readonly>
      </div>
      <div class="form-group">
          <label for="hora">Hora:</label>
          <input type="text" class="form-control" id="hora" name="hora" value="<?php echo $_GET["h"]; ?>" required readonly>
      </div>
      <div class="form-group">
          <label for="tempo">Tempo:</label>
          <select class="form-control" id="sel1" name="tempo">
            <option>00:40:00</option>
            <option>01:00:00</option>
            <option>01:30:00</option>
            <option>02:00:00</option>
            <option>02:30:00</option>
            <option>03:00:00</option>
			<option>12:00:00</option>
          </select>
      </div>
      <input type="hidden" name="cliente"   value="Compromisso">
      <input type="hidden" name="idc"       value="0">
      <input type="hidden" name="dia"       value="<?php echo $_GET["d"]; ?>">
      <input type="hidden" name="mes"       value="<?php echo $_GET["m"]; ?>">
      <input type="hidden" name="ano"       value="<?php echo $_GET["a"]; ?>">
      <input type="hidden" name="servico"   value="Compromisso">
      <input type="hidden" name="valor"     value="0.00">
      <input type="hidden" name="status"    value="Bloqueio">
      <button type="submit" class="btn btn-primary btn-block">Bloquear horário</button>
  </form>
 <?php }else{} ?>
</div>
<p style="margin: 30px 0px 30px 0px;"></p>