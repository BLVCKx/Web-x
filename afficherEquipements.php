<?PHP
	include "../controller/EquipementC.php";

	$EquipementC=new EquipementC();
	$listeUsers=$EquipementC->afficherEquipements();

?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste Equipements </title>
    </head>
    <body>
		<button><a href="connexion.php">Ajouter un Equipement</a></button>
		<hr>
		<table border=1 align = 'center'>
			<tr>
				<th>Id</th>
				<th>Typeeq</th>
				<th>Eq</th>
				<th>prix</th>
				<th>supprimer</th>
				<th>modifier</th>
			</tr>

			<?PHP
				foreach($listeUsers as $user){
			?>
				<tr>
					<td><?PHP echo $user['Id']; ?></td>
					<td><?PHP echo $user['Typeeq']; ?></td>
					<td><?PHP echo $user['Eq']; ?></td>
					<td><?PHP echo $user['Prix']; ?></td>
					<td>
						<form method="POST" action="supprimerEquipement.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $user['Id']; ?> name="id">
						</form>
					</td>
					<td>
						<a href="modifierEquipement.php?id=<?PHP echo $user['Id']; ?>"> Modifier </a>
					</td>
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>
