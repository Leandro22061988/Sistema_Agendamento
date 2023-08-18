<?php 

$sqli = "SELECT * FROM agenda_verifica";
$exec = $sql->query($sqli);
$agenda = mysqli_fetch_assoc($exec);

?>
