<?PHP
	include "../config.php";
	require_once '../Model/Equipement.php';

	class EquipementC {
		
		function ajouterEquipement($Equipement){
			$sql="INSERT INTO Equipement (typeeq, eq , prix) 
			VALUES ( :typeeq,:eq, :prix)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'typeeq' => $Equipement->getTypeeq(),
					'eq' => $Equipement->getEq(),
					'prix' => $Equipement->getPrix(),
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherEquipements(){
			
			$sql="SELECT * FROM Equipement";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerEquipement($id){
			$sql="DELETE FROM Equipement WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierEquipement($Equipement, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE Equipement SET 
						typeeq = :typeeq, 
						eq = :eq,
						prix = :prix,
					WHERE id = :id'
				);
				$query->execute([
					'typeeq' => $Equipement->getTypeeq(),
					'eq' => $Equipement->getEq(), 
					'prix' => $Equipement->getPrix(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererEquipement($id){
			$sql="SELECT * from Equipement where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererEquipement1($id){
			$sql="SELECT * from Equipement where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$user = $query->fetch(PDO::FETCH_OBJ);
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
	}

?>