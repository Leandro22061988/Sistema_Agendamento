		  
				<div class='modal-dialog'>
				  <div class='modal-content'>
					<div class='modal-header'>
					  <button type='button' class='close' data-dismiss='modal'>&times;</button>
					  <h4 class='modal-title'>Pontos que vão expirar</h4>
					</div>
					<div class='modal-body'>
								<table class="table table-hover">
									<thead>
									  <tr>
										<th style='text-align: center;'>Pontos</th>
										<th style='text-align: center;'>Data</th>
									  </tr>
									</thead>
									<tbody id="myTable">
										<?php
										$idc = $_GET["idc"];
										$sob = "SELECT * FROM sobra WHERE id_cliente='$idc'";
										$exsob = $sql->query($sob);

										while($exib = mysqli_fetch_assoc($exsob)){

											echo "
												  <tr style='text-align: center;'>
													<td>".$exib["pontos"]."</td>
													<td>".$exib["dia"]."/".$exib["mes"]."/".$exib["ano"]."</td>
												  </tr>
												  ";
										}
									   ?> 
										<?php
										$idc = $_GET["idc"];
										$sqli = "SELECT * FROM expira_pontos WHERE id_cliente='$idc'";
										$exec = $sql->query($sqli);
										$cont = mysqli_num_rows($exec);

										while($exibir = mysqli_fetch_assoc($exec)){

											echo "
												  <tr style='text-align: center;'>
													<td>".$exibir["pontos"]."</td>
													<td>".$exibir["d"]."/".$exibir["m"]."/".$exibir["a"]."</td>
												  </tr>
												  ";
										}
									   ?> 
									 
									</tbody>
								  </table>
						
					</div>
				  </div>
				</div>