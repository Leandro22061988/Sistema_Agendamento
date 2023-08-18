<?php 

$id = $_GET["id"];
$sqli = "SELECT * FROM cliente WHERE id='$id' ";
$exec = $sql->query($sqli);
$cliente = mysqli_fetch_assoc($exec);

?>
