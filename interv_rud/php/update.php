<?php 

if (isset($_GET['id'])) {
	include "db_conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM intervention WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: read.php");
    }


}else if(isset($_POST['update'])){
    include "../db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

  $date = validate($_POST['date']);
  $beneficiaire = validate($_POST['beneficiaire']);
  $veterinaire = validate($_POST['veterinaire']);
  $timeslot=validate($_POST['timeslot']);
  $id=validate($_POST['id']);
   
  if (empty($date)) {
    header("Location: ../index.php?error=Date Manquante&$user_data");
  }else if (empty($beneficiaire)) {
    header("Location: ../index.php?error=Béneficiaire Manquant&$user_data");
  }
  else if (empty($veterinaire)) {
    header("Location: ../index.php?error=Véterinaire Manquant&$user_data");
  }
  else if (empty($timeslot)) {
    header("Location: ../index.php?error=Heure manquante&$user_data");
  }
  else {

       $sql = "UPDATE intervention
               SET date='$date',beneficiaire='$beneficiaire',veterinaire='$veterinaire',timeslot='$timeslot'
               WHERE id=$id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully updated");
       }else {
          header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}else {
	header("Location: read.php");
      }