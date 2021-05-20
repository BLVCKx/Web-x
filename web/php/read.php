<?php  

include "db_conn.php";

$sql = "SELECT * FROM facture ORDER BY id DESC";
$result = mysqli_query($conn, $sql);