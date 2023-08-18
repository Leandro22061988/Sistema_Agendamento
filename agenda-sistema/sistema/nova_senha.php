﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>RodoLace Salão de Beleza</title>

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<!--<link href="css/bootstrap.css" rel="stylesheet" type="text/css" /> -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
</head>

<body>

	<div class="container">
		<div class="logo">
			<img src="img/logo.png" class="alinha" title="RodoLace Salão de Beleza 2.0">
		</div>
	</div>
	
	<form ACTION="connect/login/nova_senha.php" method="POST" name="login">
        <div id="baseLogin">
            <div class="login">
               
                <div class="titulo">Edição de senha do Administrador</div>
				
                <div class="form-group">
                  <label for="pwd">Nova Senha:</label>
                  <input type="password" name="senha" class="form-control" id="pwd" placeholder="Digite sua nova  Senha" required>
                </div>
                <input type="hidden" name="email" value="<?php echo $_GET["e"]; ?>">
                <button type="submit" class="btn btn-info">Enviar</button>
            </div>
        </div>
	</form>


</body>
</html>