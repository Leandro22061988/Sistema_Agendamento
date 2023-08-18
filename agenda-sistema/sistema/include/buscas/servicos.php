<?php 

$id = $_GET["id"];
$sqli = "SELECT * FROM servico WHERE id='$id' ";
$exec = $sql->query($sqli);
$servi = mysqli_fetch_assoc($exec);

?>
