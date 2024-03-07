<?php

class GenreFilm {
  private string $nomGenre;

  public function __construct(
    string $nomGenre,
  ){
    $this->nomGenre = $nomGenre;
  } 
 //////////GETTERS & SETTERS//////////////
  public function getNomGenre() : string
  {
    return $this->nomGenre;
  }
  public function setNomGenre($nomGenre)
  {
    $this->nomGenre = $nomGenre;
  }

  public function __toString() {
    return $this->nomGenre;
  }
}