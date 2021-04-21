<?php
    include_once '../Model/Equipement.php';
    include_once '../Controller/EquipementC.php';

    $error = "";

    // create user
    $user = null;

    // create an instance of the controller
    $userC = new EquipementC();
    if (
        isset($_POST["typeeq"]) && 
        isset($_POST["eq"]) &&
        isset($_POST["prix"]) 
        
    ) {
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
            $userC->ajouterEquipement($user);
            header('Location:afficherEquipements.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="afficherEquipements.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">

                <tr>
                    <td rowspan='2' colspan='1'>Fiche Personnelle</td>
                    <td>
                        <label for="typeeq">typeeq:
                        </label>
                    </td>
                    <td><input type="text" name="typeeq" id="typeeq" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="eq">equipement:
                        </label>
                    </td>
                    <td><input type="text" name="eq" id="eq" maxlength="20"></td>
                </tr>
                
                <tr>
                    <td rowspan='2' colspan='1'>Information de Connexion</td>
                    <td>
                        <label for="prix">prix:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="prix" id="prix" >
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>