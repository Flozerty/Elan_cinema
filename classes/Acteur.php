<?php

class Acteur extends Personne {
  private string $photo;

  public function __construct(
    string $nom,
    string $prenom,
    string $sexe,
    string $dateNaissance,
    string $photo,
  ) {
    parent::__construct($nom, $prenom, $sexe, $dateNaissance);
    $this->photo = $photo;
  }
  //////////GETTERS & SETTERS//////////////
  public function getPhoto() : string 
  {
    return $this->photo;
  }
  public function setPhoto($photo)
  {
    $this->photo = $photo;
  }
  
  public function __toString() {
    return parent::__toString();
  }
}