<?php

class equipement
{
    private $id_equipement;
    private $nom_equipement;
    private $categorie;
    private $prix;
    private $quantite;

    // Le Constructeur
    function __construct($nom,$cat,$prix,$quat)
    {
      $this->nom_equipement= $nom;
      $this->categorie= $cat;
      $this->prix= $prix;
      $this->quantite= $quat;
    }

    // Les Getters
    function getID(){
        return $this->id_equipement;
    } 
    function getNom(){
        return $this->nom_equipement;
    } 
    function getCategorie(){
        return $this->categorie;
    }
    function getPrix(){
        return $this->prix;
    } 
    function getQuantite(){
        return $this->quantite;
    } 
    
     // Les Setters
    function setNom($nom){
        $this->nom_equipement= $nom;
    }
    function setCategorie($cat){
        $this->categorie= $cat;
    }
    function setPrix($prix){
        $this->prix= $prix;
    }
    function setQuantite($quant){
        $this->quantite= $quant;
    }
}





?>