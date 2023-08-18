<?php 

$id = $_GET["id"];
$sqli = "SELECT * FROM funcao WHERE id='$id' ";
$exec = $sql->query($sqli);
$func = mysqli_fetch_assoc($exec);

?>
