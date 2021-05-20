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

	$sql = "SELECT * FROM veterinaire WHERE id=$id";
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

  $nom = validate($_POST['nom']);
  $prenom = validate($_POST['prenom']);
  $adresse = validate($_POST['adresse']);
  $email = validate($_POST['email']);
  $num_tel = validate($_POST['num_tel']);
  $spec=validate($_POST['spec']);
  $couverture=validate($_POST['couverture']);
  $id=validate($_POST['id']);
   
  if (empty($nom)) {
    header("Location: ../index.php?error=Nom manquant&$user_data");
  }else if (empty($prenom)) {
    header("Location: ../index.php?error=Prenom manquant&$user_data");
  }
  else if (empty($adresse)) {
    header("Location: ../index.php?error=Adresse manquante&$user_data");
  }
  else if (empty($email)) {
    header("Location: ../index.php?error=E-mail manquant&$user_data");
  }
  else if (empty($num_tel)) {
    header("Location: ../index.php?error=Mot de passe manquant&$user_data");
  }
  else if (empty($spec)) {
    header("Location: ../index.php?error=Mot de passe manquant&$user_data");
  }
  else if (empty($couverture)) {
    header("Location: ../index.php?error=Mot de passe manquant&$user_data");
  }
  else {

       $sql = "UPDATE veterinaire
               SET nom='$nom',prenom='$prenom',adresse='$adresse', mail='$email',num_tel='$num_tel',spec='$spec',couverture='$couverture'
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