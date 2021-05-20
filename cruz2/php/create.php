<?php 

if (isset($_POST['create'])) {
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

	$user_data='nom'.$nom.'&prenom'.$prenom.'&adresse'.$adresse.'&email'.$email.'&num_tel'.$num_tel.'&spec'.$spec.'couverture'.$couverture;

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

       $sql = "INSERT INTO veterinaire(nom, prenom, adresse, mail, num_tel,spec,couverture) 
               VALUES('$nom', '$prenom', '$adresse','$email','$num_tel','$spec','$couverture')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully created");
       }else {
          header("Location: ../index.php?error=unknown error occurred&$user_data");
       }
	}

}