<div class="container">

	<div class="row">

		<div class="col-sm-12">

			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2>AGENDA</h2>
				</div>
				<div class="panel-body">

					<div class="btn-group">
						<!--<a href="agenda_mes.php">
						  <button type="button" class="btn btn-primary"><i class="fa fa-book" aria-hidden="true"></i>
							  Agenda do mês atual</button></a>

												<a href="agenda_data.php">
						  <button type="button" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i>
							  Pesquisar por data</button></a>-->

							<a href="index.php">
								<button type="button" class="btn btn-primary"><i class="fa fa-home" aria-hidden="true"></i>
							  Ir para home</button>
							</a>
							<a href="agenda_configura.php">
								<button type="button" class="btn btn-primary"><i class="fa fa-bell-o" aria-hidden="true"></i>
							  Configurar Alerta</button>
							</a>
					
					</div>

					<?php 
							  require("include/class/retorno.php");
							  $r = new Retorno;
							  $r->cadastro();
							  $r->exclui();
							  $r->excluir();

					?>
					<p></p>
					<div id='calendar'></div>
					
					<div id="ver" class="modal fade" role="dialog">
					  <div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Detalhes do Agendamento</h4>
						  </div>
						  <div class="modal-body">
						   <div class="row">
							<dl>
								<dt class="col-sm-3">Cliente:</dt>
								<dd class="col-sm-9" id="title"></dd>
							</dl>
							</div>
							  
							<div class="row">
							<dl>   
								<dt class="col-sm-3">Telefone:</dt>
								<dd class="col-sm-9" id="telefone"></dd>
							</dl>
							</div>	
							<div class="row">
							<dl>   
								<dt class="col-sm-3">Celular:</dt>
								<dd class="col-sm-9" id="celular"></dd>
							</dl>
							</div>	
							<div class="row">
							 <dl>   
								<dt class="col-sm-3">E-mail:</dt>
								<dd class="col-sm-9" id="email"></dd>
							</dl>
							</div>	
							<div class="row">
							<dl>   
								<dt class="col-sm-3">Serviço:</dt>
								<dd class="col-sm-9" id="servico"></dd>
							</dl>
							</div>	
							<div class="row">
							<dl>   
								<dt class="col-sm-3">Profissional:</dt>
								<dd class="col-sm-9" id="profiss"></dd>
							</dl>
							</div>	
							<div class="row">
							<dl>	
								<dt class="col-sm-3">Data e Hora:</dt>
								<dd class="col-sm-9" id="hor"></dd>
							</dl>
							</div>
							<div class="row">	
							<dl>	
								<dt class="col-sm-3">Status:</dt>
								<dd class="col-sm-9" id="status"></dd>
							</dl>
							</div>   
							   
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
						  </div>
						</div>

					  </div>
					</div>
				</div>
			</div>

		</div>


	</div>

	<!--<div class="well">Normal Well</div>
  <div class="well">Normal Well</div>
  <div class="well">Normal Well</div>-->

</div>