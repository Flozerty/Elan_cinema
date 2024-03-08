<?php

class Genre {
  private string $nomGenre;
  private array $films;
  public function __construct(
    string $nomGenre,
  ){
    $this->nomGenre = $nomGenre;
    $this->films = [];
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
  public function getFilms() : array
  {
    return $this->films;
  }
  public function setFilms($films)
  {
    $this->films = $films;
  }
////////////////////////////////////////
  public function __toString() {
    return $this->nomGenre;
  }

  public function addFilm(Film $film) {
    $this->films[] = $film;
  }

  //retoure la liste des films du genre sélectionné
  public function getFilmsGenre() : string {
    $result = "<div><h2>La liste de nos films du Genre $this :</h2><ul>";
    foreach($this->films as $film) {
      $result .= "<li>$film de ".$film->getRealisateur()."</li>";
    }
    return "$result</ul></div>";
  }
}