<?php 

$id = $_GET["id"];
$sqli = "SELECT * FROM fornecedor WHERE id='$id' ";
$exec = $sql->query($sqli);
$forn = mysqli_fetch_assoc($exec);

?>
