<?php

class Film {

private string $titre;
private DateTime $dateSortie;
private int $duree;
private string $synopsis;

public function __construct(
  string $titre,
  string $dateSortie,
  int $duree,
  string $synopsis,
  ) {
    $this->titre = $titre;
    $this->dateSortie = new \DateTime($dateSortie);
    $this->duree = $duree;
    $this->synopsis = $synopsis;
  }
  //////////GETTERS & SETTERS//////////////

  public function getSynopsis() : string 
  {
  return $this->synopsis;
  }
  public function setSynopsis($synopsis)
  {
  $this->synopsis = $synopsis;
  }
  
  public function getDuree() : int 
  {
  return $this->duree;
  }
  public function setDuree($duree)
  {
  $this->duree = $duree;
  }

  public function getDateSortie()   : DateTime
  {
  return $this->dateSortie;
  }
  public function setDateSortie($dateSortie)
  {
  $this->dateSortie = $dateSortie;
  }
  public function getTitre() : string
  {
  return $this->titre;
  }
  public function setTitre($titre)
  {
  $this->titre = $titre;
  }
  
  public function __toString() {
    return $this->titre;
  }
}