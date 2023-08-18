<?php 

$id = $_GET["id"];
$sqli = "SELECT * FROM gastos WHERE id='$id' ";
$exec = $sql->query($sqli);
$gastos = mysqli_fetch_assoc($exec);

?>
