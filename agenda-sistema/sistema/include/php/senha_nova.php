<!--start-support-->
	<div class="support">
			<div class="support-top">
				<h3>Redefinir Senha</h3>
				<div class="support-bottom">
					<div class="col-md-12 support-right">
						<div class="support-info">
							<form name="contato" method="post" action="connect/login/nova_senha.php">
								<input type="password" name="senha" placeholder="Digite a nova senha" required/>
								<input type="hidden" name="email" value="<?php echo $_GET["e"]; ?>" >
								<div class="s-btn">
									<input type="submit" value="Enviar">
						    	</div>
						    </form>
						    <div class="cor">
						    	
								<p class="cor"><a href="login.php" >Fazer Login</a></p>
								<p><a href="ant_robo.php">Não sou cadastrado(a)</a></p>
						    </div>
					    </div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
	</div>
	<!--end-support-->