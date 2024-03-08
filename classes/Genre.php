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
}