<?php 

$id = $_GET["id"];
$sqli = "SELECT * FROM empresa WHERE id='$id' ";
$exec = $sql->query($sqli);
$empresa = mysqli_fetch_assoc($exec);

?>
