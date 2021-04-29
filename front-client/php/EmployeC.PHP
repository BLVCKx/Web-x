<?PHP

include "../config.PHP";

class EmployeC
{
 
    function Afficher_Employe ()

    {
    $sql ='SELECT * FROM employe';
    $db=config::getConnexion();
    try {
        
        $liste=$db->query ($sql);
        return $liste;

    }   catch (Exception $e) {
die ('Erreur' .$e->getMessage());
    }
    }


    function Ajouter_Employe($Employe)
    {
$sql="INSERT into employe (CIN,Nom,Prenom,Salaire) values(:CIN,:Nom,:Prenom,:Salaire)";
$db =config ::getConnexion();
try {
        $req =$db->prepare($sql);

        $CIN=$Employe->getCin();
        $Nom=$Employe->getNom();
        $Prenom=$Employe->getPrenom();
        $Salaire=$Employe->getSalaire();


        $req->bindValue(':CIN',$CIN);
        $req->bindValue(':Nom',$Nom);
        $req->bindValue(':Prenom',$Prenom);
        $req->bindValue(':Salaire',$Salaire);
       

        $req->execute();
        
}catch (Exception $e)
{
    echo "Erreur ".$e->getMessage();
}


    }

    
    function Supprimer_Employe($Cin)
    {
   $sql='DELETE FROM employe Where Cin=:Cin';
$db =config ::getConnexion();
try {   
       
        $req=$db->prepare($sql); 
        $req->bindValue(':Cin',$Cin);
        $req->execute();
       

}catch (Exception $e)
{
    echo "Erreur ".$e->getMessage();
}


    }



    function Modifier_Employe($Employe)
    {
       




    }


    function Afficher_Employe_ByCin ($Cin)

    {
    $sql ='SELECT * FROM employe where Cin='.$Cin;
    $db=config::getConnexion();
    try {
        
        $liste=$db->query ($sql);
        return $liste;

    }   catch (Exception $e) {
die ('Erreur' .$e->getMessage());
    }
    }



}






?>