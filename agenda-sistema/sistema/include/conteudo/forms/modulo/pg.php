		  
	<div class='modal-dialog'>
	  <div class='modal-content'>

		<div class='modal-header'>
		<script>
		function close_window() {
			close();
		}
		</script>
		<a href="javascript:close_window();">
		  <button type='button' class='close' data-dismiss='modal'>&times;</button></a>
		  <h4 class='modal-title'>Pagamento</h4>
		</div>			
				<div class='modal-body'>
					<div class="row">
						<div class="col-sm-10">
							<p>
							<?php if($_GET["m"] == "Dinheiro"){ ?>
								
								<label class='control-label' for='status'>Formulário de Cáculo: </label>
								
							<?php }elseif($_GET["m"] == "Cartão"){ ?>
								
								<label class='control-label' for='status'>Pagamento com: </label>
								
							<?php }elseif($_GET["m"] == "---"){ ?>
								
								<label class='control-label' for='status'>Status: </label>
								
							<?php } ?>
							<p>
								
							<?php if($_GET["m"] == "Dinheiro"){ ?>
								
							<script>
								/*function calcular(){
									var n1 = parseInt(document.getElementById('n1').value, 10);
									var n2 = parseInt(document.getElementById('n2').value, 10);
									document.getElementById('resultado').innerHTML = n2 - n1;
								}*/
								String.prototype.formatMoney = function() {
								var v = this;

								if(v.indexOf('.') === -1) {
									v = v.replace(/([\d]+)/, "$1,00");
								}

								v = v.replace(/([\d]+)\.([\d]{1})$/, "$1,$20");
								v = v.replace(/([\d]+)\.([\d]{2})$/, "$1,$2");
								v = v.replace(/([\d]+)([\d]{3}),([\d]{2})$/, "$1.$2,$3");

								return v;
								};
								function id( el ){
									return document.getElementById( el );
								}
								function getMoney( el ){
									var money = id( el ).value.replace( ',', '.' );
									return parseFloat( money )*100;
								}
								function soma()
								{
									
									
									var total = getMoney('n2')-getMoney('n1');
									id('n3').value = 'R$ '+ String(total/100).formatMoney();
								}
							</script>
								
							<form form action="" method="">	
							<div class="col-xs-12">	
								<div class="form-group row">
								  <div class="col-xs-10">
									<label for="n1">Valor do(s) serviços:</label>
									<input class="form-control" id="n1" type="text" value="<?php echo $_GET["v"]; ?>" onFocus="soma()" readonly>
								  </div>
								  <div class="col-xs-10">
									<label for="n2">Pago com:</label>
									<input class="form-control" id="n2" type="text" value="" onBlur="soma()" placeholder="Digite o valor">
								  </div>
								  <div class="col-xs-10">
									<label for="n3">Troco:</label>
									<input class="form-control" id="n3" type="text" value="" onChange="soma()" readonly>
								  </div>
								  <!--<div class="col-xs-10">
									<label for="ex3">Troco:</label>
									  <input type="button" onclick="soma()" value="Soma de Valores" />
								  </div>-->
								</div>
							</div>
							</form>
							<?php }elseif($_GET["m"] == "Cartão"){ ?>
							
							<div class="col-xs-12">	
								<div class="form-group row">
								  <div class="col-xs-10">
									<label for="n1">Máquina de cartão, esta página já pode ser fechada.</label>
								  </div>
								</div>
							</div>
							<?php }elseif($_GET["m"] == "Promissória"){ ?>
							
							<div class="col-xs-12">	
								<div class="form-group row">
								  <div class="col-xs-10">
									<label for="n1">Pagamento via promissória, realizado com sucesso.</label>
								  </div>
								</div>
							</div>
							
							<?php }elseif($_GET["m"] == "---"){ ?>
							
							<div class="col-xs-12">	
								<div class="form-group row">
								  <div class="col-xs-10">
									<label for="n1">O agendamento foi cancelado, esta página já pode ser fechada.</label>
								  </div>
								</div>
							</div>
							<?php }?>
							</p>
						</div>
		  			</div>
				</div>
		  	</div>
		</div>