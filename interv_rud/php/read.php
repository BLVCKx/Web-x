<?php  

include "db_conn.php";

$sql = "SELECT * FROM intervention ORDER BY date,timeslot,veterinaire DESC";
$result = mysqli_query($conn, $sql);