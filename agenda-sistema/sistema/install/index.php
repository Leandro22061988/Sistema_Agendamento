<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>RodoLace Salão de Beleza</title>

<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
<link href="../css/estilo.css" rel="stylesheet" type="text/css" />
<!--<link href="css/bootstrap.css" rel="stylesheet" type="text/css" /> -->
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>
</head>

<body>

	<div class="container">
		<div class="logo">
			<img src="../img/logo.png" class="alinha" title="RodoLace Salão de Beleza 2.0">
		</div>
	</div>
	
	<form ACTION="config_db.php" method="POST" name="bd">
        <div id="baseLogin">
            <div class="login">
               
                <div class="titulo">Instalação do banco de dados e tabelas</div>
                <?php if( isset($_GET["install"]) == "ok"){ ?>
   		  		<div class="mens">
                    <div class="alert alert-success">
                      <strong>Tudo Certo!</strong> Agora você já pode acessar o sistema.
                    </div>
                </div>
				<div class="row">
				  <div class="col-sm-12">
					  <h4>
						  Dados de acesso.<br/><br/>
						  <strong>Login</strong>: admin<br/>
						  <strong>Senha</strong>: admim<br/><br/>
						  Clique <a href="../login.php">AQUI</a> para acessar o sistema.
					  </h4>
				  </div>
				</div> 
				<?php }else{ ?>
				<div class="row">
				  <div class="col-sm-12">
					  <h3>Ola!</h3>
					  <h4>Será feita a instalação da base de dados automaticamente após clicar em avança.</h4>
				  </div>
				</div> 
				<button type="submit" class="btn btn-info">Avançar</button>
               <?php } ?>
                
                 
                
                
                
            </div>
        </div>
	</form>
	
	<form ACTION="opcao.php" method="POST" name="colunas">
        <div id="baseLogin">
            <div class="login">
               
                <div class="titulo2">Instalação de colunas da tabela</div>
                <?php if( isset($_GET["col"]) == "ok"){ ?>
   		  		<div class="mens">
                    <div class="alert alert-success">
                      <strong>Tudo Certo!</strong> Agora você já pode acessar o sistema.
                    </div>
                </div>
				<div class="row">
				  <div class="col-sm-12">
					  <h4>
						  Clique <a href="../login.php">AQUI</a> para acessar o sistema.
					  </h4>
				  </div>
				</div> 
				<?php }else{ ?>
				<div class="row">
				  <div class="col-sm-12">
					  <h4>Será feita a instalação das colunas automaticamente após escolher a tabela e clicar em avança.</h4>
					  <div class="form-group">
						  <label for="sel1">Selecione a tabela:</label>
						  <select class="form-control" id="sel1" name="tab">
							<option>Selecione uma tabela</option>
							<option>Caixa</option>
							<option>Cliente</option>
							<option>Estoque</option>
						  </select>
					  </div>
				  </div>
				</div> 
				<button type="submit" class="btn btn-info">Avançar</button>
               <?php } ?>
                
                 
                
                
                
            </div>
        </div>
	</form>


</body>
</html>