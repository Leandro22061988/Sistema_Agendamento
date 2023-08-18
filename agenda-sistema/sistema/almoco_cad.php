<?php include './include/php/controle.php'; ?>
<!doctype html>
<html lang="pt-br">
<head>
<?php include './include/head/js_css.php'; ?>
</head>

<body>

<?php include './include/menu/menu.php'; ?>

	<?php 

			$id = $_GET["id"];
			$sqli = "SELECT * FROM almoco WHERE id_pro='$id'";
			$exec = $sql->query($sqli);
			$exibir = mysqli_fetch_assoc($exec);
	?>

	<?php if($exibir["id_pro"]){ ?>

		<?php include './include/conteudo/admin/almoco_f.php'; ?>
		
	<?php }else{ ?>

		<?php include 'include/conteudo/forms/admin/almoco_cad.php'; ?>

	<?php }?>

<?php include './include/footer/footer.php'; ?>