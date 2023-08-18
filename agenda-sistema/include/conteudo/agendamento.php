<p style="margin: 30px 0px 30px 0px;"></p>  
<div class="container">
  <p style="width: 100%; margin-left: auto; margin-right: auto;">
      <a href="horarios.php">
        <i class="fa fa-caret-left" aria-hidden="true" style="width: 10%; float: left; font-size: 50px; margin: 10px 0px 0px 0px;"></i></a>
        <span style="width: 85%; float: left; font-size: 30px; margin: 0px 0px 40px 0px; padding: 20px 0px 20px 20px;">Agendamento</span>
   </p>
    <p style="width: 100%; float: left; margin: 0px 0px 30px 0px;">
      <strong>Data:</strong> <?php echo $_GET["d"]."/".$_GET["m"]."/".$_GET["a"]; ?> <br/>
      <strong>Horario:</strong> <?php echo $_GET["h"]; ?> <br/>
      <strong>Profissional:</strong> <?php echo $_GET["p"]." - ".$_GET["f"]; ?> <br/>
  </p>
  <?php
        /*$horaA = '14:30:00';
        $horaB = '17:30:00';

        echo calculaTempo($horaA, $horaB);*/
        function calculaTempo($hora_inicial, $hora_final) {
         $i = 1;
         $tempo_total;

         $tempos = array($hora_final, $hora_inicial);

         foreach($tempos as $tempo) {
          $segundos = 0;

          list($h, $m, $s) = explode(':', $tempo);

          $segundos += $h * 3600;
          $segundos += $m * 60;
          $segundos += $s;

          $tempo_total[$i] = $segundos;

          $i++;
         }
         $segundos = $tempo_total[1] - $tempo_total[2];

         $horas = floor($segundos / 3600);
         $segundos -= $horas * 3600;
         $minutos = str_pad((floor($segundos / 60)), 2, '0', STR_PAD_LEFT);
         $segundos -= $minutos * 60;
         $segundos = str_pad($segundos, 2, '0', STR_PAD_LEFT);

         return "$horas:$minutos:$segundos";
        }

?>
  <form name="cadastro">
       <div class="form-group">
          <label for="ser">Selecione o Serviços/Valor:</label>
          <select class="form-control" id="ser" onchange='location=this.value;'>
            <option></option>
            <?php 
              include './include/php/horaData.php';
              $nFunc = $_GET["p"];
              $idPro = $_GET["i"];
              $dia = $_GET["d"];
              $mes = $_GET["m"];
              $ano = $_GET["a"];
              $hora = $_GET["h"];
              $posh = $_GET["ph"];
              $fU = $_GET["f"];
              
              $cli = $_SESSION["nome"];
              $idc = $_SESSION["id"];
              $clT = $_SESSION["ctel"];
              $clC = $_SESSION["ccel"];
              $clE = $_SESSION["cema"];
              
              $baU = $conn->prepare("SELECT * FROM servico WHERE funcao='$fU'");
              $baU->execute();
              while($servico = $baU->fetch(PDO::FETCH_ASSOC)){
            ?>                
              <option value="include/insert/agenda.php?p=<?php echo $nFunc ?>&i=<?php echo $idPro; ?>&c=<?php echo $cli ?>&ci=<?php echo $idc; ?>&ct=<?php echo $clT; ?>&cc=<?php echo $clC; ?>&ce=<?php echo $clE; ?>&d=<?php echo $dia; ?>&m=<?php echo $mes; ?>&a=<?php echo $ano; ?>&h=<?php echo $hora; ?>&si=<?php echo $servico["id"]; ?>&s=<?php echo $servico["nome"]; ?>&t=<?php echo $servico["tempo"]; ?>&v=<?php echo $servico["valor"]; ?>"><?php echo $servico["nome"]." - Valor: R$ ".number_format($servico["valor"],2,",","."); ?></option>
            <?php }//while serviços ?>
          </select>
        </div>
      
  </form>
    
</div>
<p style="margin: 30px 0px 30px 0px;"></p>