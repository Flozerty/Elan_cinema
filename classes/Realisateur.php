<?php

class Realisateur extends Personne {
  private string $biographie;
  public function __construct(
    string $nom,
    string $prenom,
    string $sexe,
    string $dateNaissance,
    string $biographie,
  ) {
    parent::__construct($nom, $prenom, $sexe, $dateNaissance );
    $this->biographie = $biographie;
  }
  //////////GETTERS & SETTERS//////////////
  public function getBiographie() : string
  {
    return $this->biographie;
  }
  public function setBiographie($biographie)
  {
    $this->biographie = $biographie;
  }
  
  public function __toString() {
    return parent::__toString();
  }
}