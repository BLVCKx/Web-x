<?PHP
	include "../controller/EquipementC.php";

	$EquipementC=new EquipementC();
	
	if (isset($_POST["id"])){
		$EquipementC->supprimerEquipement($_POST["id"]);
		header('Location:afficherEquipements.php');
	}

?>