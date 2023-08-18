	<div class="container">
		<div class="logo">
			<img src="img/logo.png" class="alinha" title="J C Sistemas Web e Mobile 2.0">
		</div>
	</div>
	<div class="container">
		

			<a href="agenda.php"><button type="button" class="btn btn-primary btn-lg">
				<i class="fa fa-book" aria-hidden="true"></i> Agenda</button></a>
			<a href="cliente.php"><button type="button" class="btn btn-primary btn-lg">
			<i class="fa fa-user-plus" aria-hidden="true"></i> Clientes</button></a>
			<a href="funcionarios.php"><button type="button" class="btn btn-primary btn-lg">
			<i class="fa fa-users" aria-hidden="true"></i> Funcionários</button></a>
			<a href="fornecedores.php"><button type="button" class="btn btn-primary btn-lg">
			<i class="fa fa-truck" aria-hidden="true"></i> Fornecedores</button></a>
			<a href="caixa.php"><button type="button" class="btn btn-primary btn-lg">
			<i class="fa fa-usd" aria-hidden="true"></i> Caixa</button></a>
			<a href="estoque.php"><button type="button" class="btn btn-primary btn-lg">
			<i class="fa fa-cubes" aria-hidden="true"></i> Estoque</button></a>
			<a href="administrativo.php"><button type="button" class="btn btn-primary btn-lg">
			<i class="fa fa-cogs" aria-hidden="true"></i> Administração</button></a>
			<?php echo "<a href='connect/logout/logout.php?token=".md5(session_id())."'><button type='button' class='btn btn-default btn-lg'>
			<i class='fa fa-sign-out' aria-hidden='true'></i> Sair</button></a>"; ?>
			
		
	</div>