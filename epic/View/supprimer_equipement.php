<?php
include "ajouter_equipement.php";

$prod = new equipementC();

if (isset($_POST['id_equipement'])) {
    $prod->supprimerequipement($_POST['id_equipement']);
    header('Location:../View/afficher_equipement.php');
    
} else {
    echo 'Erreur : try again';
    echo $_POST['id_equipement'];

}
?>