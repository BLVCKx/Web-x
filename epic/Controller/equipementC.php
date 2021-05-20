<?php
include "../config.php";
require_once "../Model/equipement.php";


class equipementC
{
  function ajouterequipement($equipement)
  {
    /*$sql="INSERT INTO equipement (nom_equipement, categorie, prix, quantite) 
    VALUES (:nom_equipement,:categorie,:prix, :quantite)";
    $db = config::getConnexion();
    
    try{
        $req=$db->prepare($sql);
        $nom_equipement= $equipement->getNom();
        $categorie= $equipement->getCategorie();
        $prix= $equipement->getPrix();
        $quantite= $equipement->getQuantite();


        $req->bindValue(':nom_equipement',$nom_equipement);
        $req->bindValue(':categorie',$categorie);
        $req->bindValue(':prix',$prix);
        $req->bindValue(':quantite',$quantite);
    
        $req->execute();
        if ($req->execute()){
            echo "OK";
            header ('Location:./View/afficher_equipement.php');
        }
        else echo "NOK";
        */
        $sql = "INSERT INTO equipement(nom_equipement, categorie, prix, quantite) 
			VALUES (:nom_equipement,:categorie,:prix, :quantite)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'nom_equipement' => $equipement->getNom(),
                'categorie' => $equipement->getCategorie(),
                'prix' => $equipement->getPrix(),
                'quantite' => $equipement->getQuantite()
               
                

            ]);
            ?>
            <script> alert("equipement crée"); </script>
            <?PHP
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
    }

       
    catch (Exception $e)
    {
        die('Erreur: '.$e->getMessage());
    }
  }

  function afficherequipement()
  {
    $sql="SELECT * FROM equipement";
    $db = config::getConnexion();
    try
    {
        $list=$db->query($sql);
        return $list;
    }
    catch (Exception $e)
    {
        die('Erreur: '.$e->getMessage());
    }

  }

  /*function modifierequipement($id_equipement,$nom_equipement,$categorie,$prix,$quantite)
  {
    $sql= "UPDATE equipement SET nom_equipement='$nom_equipement', categorie='$categorie',prix='$prix',quantite='$quantite' WHERE id_equipement='$id_equipement' ";
    $db = config::getConnexion();
       
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
  }*/
  
  function supprimerequipement($id_equipement)
  {
 
  $sql = "DELETE FROM equipement WHERE id_equipement = :id_equipement";
  $db = config::getConnexion();
  $req = $db->prepare($sql);
  $req->bindValue(':id_equipement', $id_equipement);
  try {
      $req->execute();
      echo "Supprimees avec succees ! ";

  } 
  catch (Exception $e) {
      die('Erreur: ' . $e->getMessage());
  }
 }

function recupererequipement($id_equipement){
    $sql="SELECT * from equipement where id_equipement =$id_equipement";
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
/*
function rechercherequipement($id_equipement)
{
    $sql="SELECT * from equipement where id_equipement=$id_equipement";
    $db = config::getConnexion();
    try{
    $req=$db->query($sql);
    return $req;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}*/
/*function rechercherequipement($nom_equipement) {
    $sql = "SELECT * from equipement where nom_equipement=:nom_equipement";
    $db = config::getConnexion();
    try {
        $query = $db->prepare($sql);
        $query->execute([
            'nom_equipement' => $equipement->getNom(),
        ]);
        $result = $query->fetchAll();
        return $result;
    }
    catch (PDOException $e) {
        $e->getMessage();
    }


}*/


/*function modifierequipement($equipement,$id_equipement)
    {
        
            try {
                $db = config::getConnexion();
                $sql= "UPDATE equipement SET nom_equipement =:nom_equipement,categorie =:categorie, prix =:prix WHERE id_equipement =".$_GET['id_equipement'] ;
                
                $query = $db->prepare($sql);
                //  $query->bindValue(':id',1);
                $query->bindValue(':nom_equipement', $equipement->getNom());
                $query->bindValue(':prix', $equipement->getPrix());
                $query->bindValue(':categorie',$equipement->getCategorie());
                $query->bindValue(':quantite', $equipement->getQuantite());
                
                //var_dump($equipement->getPrix());
                //die;
                $query->execute();
                //echo $query->rowCount() . " records UPDATED successfully <br>";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        
    }*/




/*function modifierequipement($equipement,$id_equipement)
  {
    $sql= "UPDATE equipement SET nom_equipement=: 'nom_equipement', categorie=:categorie,prix=:prix,quantite=:quantite WHERE id_equipement=:$id_equipement' ";
    $db = config::getConnexion();
       
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }


  
    }*/
 function modifierequipement($equipement,$id_equipement)
 {
    try
    {
        $db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE equipement SET 
						nom_equipement = :nom_equipement, 
						categorie = :categorie,
						prix = :prix,
						quantite = :quantite
						
					WHERE id_equipement = :id_equipement'
				);
				$query->execute([
					'nom_equipement' => $equipement->getNom(),
					'categorie' => $equipement->getCategorie(),
					'prix' => $equipement->getPrix(),
					'quantite' => $equipement->getQuantite(),
					
					'id_equipement' => $id_equipement
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
    } 
    catch (PDOException $e)
     {
        $e->getMessage();
    }
 }

 function trierequipement()
 {
     $sql = "SELECT * from equipement ORDER BY prix DESC";
     $db = config::getConnexion();
     try {
         $req = $db->query($sql);
         return $req;
     } 
     catch (Exception $e)
      {
         die('Erreur: ' . $e->getMessage());
     }
 }


  function recherche($search_value)
        {
            $sql="SELECT * FROM equipement where id_equipement like '$search_value' or nom_equipement like '%$search_value%' or prix like '%$search_value%' or quantite like '%$search_value%' or id_equipement like '%$search_value%'  ";
    
            //global $db;
            $db =Config::getConnexion();
    
            try{
                $result=$db->query($sql);
    
                return $result;
    
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }



// Pagination

 function AfficherequipementPaginer($page, $perPage)
    {
        $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
        $sql = "SELECT * FROM equipement LIMIT {$start},{$perPage}";
        $db = config::getConnexion();
        try 
        {
            $liste = $db->prepare($sql);
            $liste->execute();
            $liste = $liste->fetchAll(PDO::FETCH_ASSOC);
            return $liste;
        } 
        catch (Exception $e) 
        {
            die('Erreur: ' . $e->getMessage());
        }
    }
    
    
    
    function calcTotalRows($perPage)
    {
        $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM equipement";
        $db = config::getConnexion();
        try {
    
            $liste = $db->query($sql);
            $total = $db->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
            $pages = ceil($total / $perPage);
            return $pages;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
}

?>