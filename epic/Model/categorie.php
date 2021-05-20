<?php
class categorie
{
  private $id_categ;
  private $nom_categ;
  private $descriptionc;

  // Le Constructeur
  function __construct($nom,$description)
  {
    //$this->id_categ= $id;
    $this->nom_categ= $nom;
    $this->descriptionc= $description;
  }

  // Les Getters
  function getIDC(){
    return $this->id_categ;
} 
function getNomC(){
    return $this->nom_categ;
} 
function getDescription(){
    return $this->descriptionc;
} 

// Les Setters
function setNomC($nom){
    $this->nom_categ= $nom;
}
function setDescription($Desc){
    $this->descriptionc= $Desc;
}


}




?>