	<div class="container">
		<div class="logo">
			<img src="../../img/logo.png" class="alinha" title="RodoLace Salão de Beleza 2.0">
		</div>
	</div>
	<div class="container">
		

			<a href="index.php"><button type="button" class="btn btn-primary btn-lg">
				<i class="fa fa-book" aria-hidden="true"></i> Agenda</button></a>
			<a href="financeiro.php"><button type="button" class="btn btn-primary btn-lg">
			<i class="fa fa-user-plus" aria-hidden="true"></i> Financeiro</button></a>
			<?php echo "<a href='../../connect/logout/func/logout.php?token=".md5(session_id())."'><button type='button' class='btn btn-default btn-lg'>
			<i class='fa fa-sign-out' aria-hidden='true'></i> Sair</button></a>"; ?>
			
		
	</div>