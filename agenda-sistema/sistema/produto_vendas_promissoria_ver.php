<?php include './include/php/controle.php'; ?>
<!doctype html>
<html lang="pt-br">
<head>
<?php include './include/head/js_css.php'; ?>
	<style>
		.prom{
			width: 100%;
			float: left;
			border: 1px solid #000;
		}
		.prom .colunleft{
			width: 40%;
			float: left;
			margin: 10px;
		}
		.prom .colunright{
			width: 40%;
			float: right;
			margin: 10px;
		}
		.prom .top{
			width: 100%;
			float: left;
			font-size: 18px;
			text-align: center;
			margin: 10px 0px 0px 0px;
			border-bottom: 1px solid #000;
			padding: 10px 0px 10px 0px;
		}
		.prom .mid{
			width: 100%;
			float: left;
			text-align: center;
			border-top: 1px solid #000;
			border-bottom: 1px solid #000;
		}
		.prom .conteudo{
			width: 50%;
			float: left;
			margin: 10px 0px 10px 0px;
			padding: 0px 0px 0px 10px;
		}
		.prom .assina{
			width: 100%;
			float: left;
			text-align: center;
			margin: 30px 0px 10px 0px;
			padding: 0px 0px 0px 10px;
		}
	</style>
</head>

<body>

<?php include './include/menu/menu.php'; ?>


<?php include './include/conteudo/admin/produto/promissoria_ver.php'; ?>

<?php include './include/footer/footer.php'; ?>