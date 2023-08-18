<?php 

$id = $_GET["id"];
$sqli = "SELECT * FROM estoque WHERE id='$id' ";
$exec = $sql->query($sqli);
$estoque = mysqli_fetch_assoc($exec);

?>
