<?php 

$sqli = "SELECT * FROM fornecedor";
$exec = $sql->query($sqli);
$estfor = mysqli_fetch_assoc($exec);

?>
