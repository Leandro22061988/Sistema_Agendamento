﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>RodoLace Salão de Beleza</title>

<link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon" />
<link href="../../css/estilo.css" rel="stylesheet" type="text/css" />
<!--<link href="css/bootstrap.css" rel="stylesheet" type="text/css" /> -->
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../../font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<script src="../../js/jquery.min.js"></script>
<script src="../../js/bootstrap.min.js" type="text/javascript"></script>
</head>

<body>

	<div class="container">
		<div class="logo">
			<img src="../../img/logo.png" class="alinha" title="RodoLace Salão de Beleza 2.0">
		</div>
	</div>
	
	<form ACTION="../../connect/login/func/login.php" method="POST" name="login">
        <div id="baseLogin">
            <div class="login">
               
                <div class="titulo">Acesso ao Sistema</div>
                <?php if( isset($_GET["login"]) == "erro"){ ?>
   		  		<div class="mens">
                    <div class="alert alert-danger">
                      <strong>Erro!</strong> Login ou Senha incorreto(s).
                    </div>
                </div>
				<?php }else{ ?>
               <?php } ?>
                
                <div class="form-group">
                   <label for="email">Login:</label>
                   <input type="text" name="login" class="form-control" id="email" placeholder="Digite seu login" required>
                </div>
                <div class="form-group">
                  <label for="pwd">Senha:</label>
                  <input type="password" name="senha" class="form-control" id="pwd" placeholder="Digite sua Senha" required>
                </div>
                <div class="checkbox">
                  <div class="esqueci">
				  Acesso de administrador
             		<a href="../../login.php">Clique aqui</a><br/>
                  	<strong>Para nova senha fale com o administrador</strong>
                  </div>
                </div>
                <button type="submit" class="btn btn-info">Entrar no Sistema</button>
            </div>
        </div>
	</form>


</body>
</html>