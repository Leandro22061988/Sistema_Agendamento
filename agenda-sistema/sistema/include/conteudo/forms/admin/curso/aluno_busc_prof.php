
	
	  <div class="form-group">
     
      <label class="control-label col-sm-2" for="profissional">Profissional:</label>
		<div class="col-xs-4">
		<select name="fun" class="form-control" >
		<?php
		$f = $_GET["q"];
		$i = $_GET["id"];
		$func = "SELECT * FROM cliente WHERE id='$i' ORDER BY nome";
		$exf = $sql->query($func);
		$exib = mysqli_fetch_assoc($exf);
			
		$sqli = "SELECT * FROM funcionario WHERE funcao='$f' ORDER BY nome";
		$exec = $sql->query($sqli);
		  
		while($exibir = mysqli_fetch_assoc($exec)){
			
			echo "<option>".$exibir["nome"]."</option>";
		}
		?>			
		</select> 
		</div>
		
	  </div>
		<div class="form-group">
     
      <label class="control-label col-sm-2" for="profissional">Forma de Pagamento:</label>
		<div class="col-xs-4">
		<select name="forma" class="form-control" >
			<option>Dinheiro</option>
			<option>Cartão</option>
		</select> 
		</div>
		
	  </div>
	<div class="form-group">
     
      <label class="control-label col-sm-2" for="profissional">Parcelamento: x</label>
		<div class="col-xs-4">
		<select name="parc" class="form-control" >
		<?php $m = 1;
			while($m<=12){

				echo "<option>$m</option>";
				$m++;
			}
			 ?>		
		</select> 
		</div>
		
	  </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="vparc">Valor das Parcelas:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="vparc" value="0.00" name="vparc" required>
      </div>
    </div>
	<div class="form-group">
     
      <label class="control-label col-sm-2" for="profissional">Juros: %</label>
		<div class="col-xs-4">
		<select name="juros" class="form-control" >
		<?php $m = 0;
			while($m<=100){

				echo "<option>$m</option>";
				$m++;
			}
			 ?>		
		</select> 
		</div>
		
	  </div>
	
    <input type="hidden" name="c" value="<?php echo $_GET["q"]; ?>">
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Enviar</button>
		<input type="button" class="btn" value="Voltar" onClick="history.go(-1)"> 
      </div>
    </div>
  </form>
