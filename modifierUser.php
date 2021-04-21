<?php
    include "../controller/EquipementC.php";
    include_once '../Model/Equipement.php';

	$EquipementC = new EquipementC();
	$error = "";

	if (
        isset($_POST["typeeq"]) && 
        isset($_POST["eq"]) && 
        isset($_POST["prix"])  
        
    ){
		if (
            !empty($_POST["typeeq"]) && 
            !empty($_POST["eq"]) && 
            !empty($_POST["prix"]) 
          
        ) {
            $user = new Equipement(
                $_POST['typeeq'],
                $_POST['eq'], 
                $_POST['prix'],
            );
            
            $EquipementC->modifierEquipement($user, $_GET['id']);
            //header('Location:afficherEquipements.php');
        }
        else
            $error = "Missing information";
	}

?>
<html>
	<head>
		<title>Modifier Equipement</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<button><a href="afficherEquipements.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['id'])){
				$user = $EquipementC->recupererEquipement1($_GET['id']);
				
		?>
		<form action="" method="POST">
            <table align="center">
                <tr>
                    <td rowspan='3' colspan='1'>Fiche Personnelle</td>
                    <td>
                        <label for="typeeq">typeeq:
                        </label>
                    </td>
                    <td><input type="text" name="typeeq" id="typeeq" maxlength="20" value = "<?php echo $user->Typeeq; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="eq">equipement:
                        </label>
                    </td>
                    <td><input type="text" name="eq" id="eq" maxlength="20" value = "<?php echo $user->Eq; ?>"></td>
                </tr>
                <tr>
                    <td rowspan='2' colspan='1'>Information de Connexion</td>
                    <td>
                        <label for="prix">prix:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="prix" id="prix" value = "<?php echo $user->Prix; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier" name = "modifer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
	</body>
</html>