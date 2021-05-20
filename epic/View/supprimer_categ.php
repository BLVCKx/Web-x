<?php
include "ajouter_categ.php";

$prod = new categorieC();

if (isset($_POST['id_categ'])) {
    $prod->supprimerequipement($_POST['id_categ']);
    header('Location:../View/afficher_categ.php');
} else {
    echo 'Erreur : try again';
    echo $_POST['id_categ'];

}


?>