<?php
	$f = $_GET["q"];
	$i = $_GET["id"];
	$func = "SELECT * FROM cliente WHERE id='$i' ORDER BY nome";
	$exf = $sql->query($func);
	$exib = mysqli_fetch_assoc($exf);

	$sqli = "SELECT * FROM funcionario WHERE funcao='$f' ORDER BY nome";
	$exec = $sql->query($sqli);

	while($exibir = mysqli_fetch_assoc($exec)){

		echo "<option>".$exibir["nome"]."</option>";
	}
?>	
<input type="text" class="form-control" id="vparc" value="0.00" name="vparc" required>