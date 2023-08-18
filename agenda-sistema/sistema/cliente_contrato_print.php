<?php include './include/php/controle.php'; ?>
<!doctype html>
<html lang="pt-br">
<head>
<link href="css/estilo.css" rel="stylesheet" type="text/css" media="print" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<style>
	.imB{
			width: 145px;
			float: left;
		}
		.basePrint{
			width: 100%; 
			height: 220px;
			float: left;
			font-size: 11px;
		}
		.basePrint .conte{
			width: 40%;
			height: 210px;
			float: left;
		}
		.basePrint .fot{
			width: 20%;
			height: 198px;
			float: left;
		}
		.basePrintC{
			width: 100%; 
			height: 100px;
			float: left;
			font-size: 11px;
		}
		.basePrintC .conte{
			width: 40%;
			height: 98px;
			float: left;
		}
		.basePrintC .fot{
			width: 20%;
			height: 98px;
			float: left;
		}
		.basePrintA{
			width: 100%; 
			height: 100px;
			float: left;
			font-size: 11px;
		}
		.basePrintA .conte{
			width: 50%;
			height: 98px;
			float: left;
		}
	@media print{
		.imB{
			width: 145px;
			float: left;
		}
		.basePrint{
			width: 100%; 
			height: 220px;
			float: left;
			font-size: 11px;
		}
		.basePrint .conte{
			width: 40%;
			height: 210px;
			float: left;
		}
		.basePrint .fot{
			width: 20%;
			height: 198px;
			float: left;
		}
		.basePrintC{
			width: 100%; 
			height: 100px;
			float: left;
			font-size: 11px;
		}
		.basePrintC .conte{
			width: 40%;
			height: 98px;
			float: left;
		}
		.basePrintC .fot{
			width: 20%;
			height: 98px;
			float: left;
		}
		.basePrintA{
			width: 100%; 
			height: 100px;
			float: left;
			font-size: 11px;
		}
		.basePrintA .conte{
			width: 50%;
			height: 98px;
			float: left;
		}
	}
	/*.img{
		max-width: 140px;
		margin-right: 20px;
	}
	@media print{
		.img{
		max-width: 400px;
		margin-right: 20px;
	}
	}*/
</style>
</head>

<body>

<?php include './include/conteudo/admin/curso/cliente_contrato_print.php'; ?>

</body>
</html>