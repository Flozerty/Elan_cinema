<?php

class Realisateur extends Personne {
  private string $biographie;
  private array $films;
  public function __construct(
    string $nom,
    string $prenom,
    string $sexe,
    string $dateNaissance,
    string $biographie,

  ) {
    parent::__construct($nom, $prenom, $sexe, $dateNaissance );
    $this->biographie = $biographie;
    $this->films = [];
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
  public function getFilms() : array
  {
    return $this->films;
  }
  public function setFilms($films)
  {
    $this->films = $films;
  }
  /////////////////////////////////////////
  public function __toString() {
    return parent::__toString();
  }

  public function addFilm(Film $film) {
    $this->films[] = $film;
  }

}