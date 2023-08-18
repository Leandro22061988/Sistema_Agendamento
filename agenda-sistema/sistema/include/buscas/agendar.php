<?php 

$id = $_POST["cliente"];
$sqli = "SELECT * FROM cliente WHERE id='$id'";
$exec = $sql->query($sqli);
$mostra = mysqli_fetch_assoc($exec);

?>
<?php 

$id = $_POST["servico"];
$sqli = "SELECT * FROM servico WHERE id='$id'";
$exec = $sql->query($sqli);
$mserv = mysqli_fetch_assoc($exec);

?>
<?php 

$n = $mserv["nome"];
$sqli = "SELECT * FROM fidelidade WHERE servico='$n'";
$exec = $sql->query($sqli);
$fid = mysqli_fetch_assoc($exec);

?>
<?php 

$nome = $_POST["pro"];
$sqli = "SELECT * FROM funcionario WHERE nome='$nome'";
$exec = $sql->query($sqli);
$mfunc = mysqli_fetch_assoc($exec);

?>
<?php 

$idpr = $mfunc["id"];
$sqli = "SELECT * FROM almoco WHERE id_pro='$idpr'";
$exec = $sql->query($sqli);
$alpega = mysqli_fetch_assoc($exec);

?>