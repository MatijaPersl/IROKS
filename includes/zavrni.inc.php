<?php 
require('dbh.inc.php');

$sql = "DELETE FROM narocilo WHERE idNarocilo = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, 'i',  $_GET['id']); 
mysqli_stmt_execute($stmt);

header("Location: ../pregledNarocil.php?order=deleted");

?>