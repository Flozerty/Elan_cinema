<?php

class Film {

  private string $titre;
  private DateTime $dateSortie;
  private int $duree;
  private string $synopsis;
  private Realisateur $realisateur;
  private Genre $genre;
  private array $castings;

  public function __construct(
    
    string $titre,
    string $dateSortie,
    int $duree,
    string $synopsis,
    Realisateur $realisateur,
    Genre $genre,
  ) {
    $this->titre = $titre;
    $this->dateSortie = new \DateTime($dateSortie);
    $this->duree = $duree;
    $this->synopsis = $synopsis;
    $this->realisateur = $realisateur;
    $this->genre = $genre;

    $this->castings = [];

    // Ajout du film dans le genre et le réalisateur associé
    $this->genre->addFilm($this);
    $this->realisateur->addFilm($this);
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
  public function getRealisateur() : Realisateur
  {
    return $this->realisateur;
  }
  public function setRealisateur($realisateur)
  {
    $this->realisateur = $realisateur;
  }
   public function getGenre() : Genre
   {
      return $this->genre;
   }
   public function setGenre($genre)
   {
      $this->genre = $genre;
   }
   public function getCastings() : array
   {
     return $this->castings;
   } 
   public function setCastings($castings)
   {
     $this->castings = $castings;
   }
   ////////////////////////////////
   public function __toString() {
    return $this->titre;
  }
  public function addCasting(Casting $casting) {
    $this->castings[] = $casting;
  }

  // renvoie tous les acteurs avec un rôle joué dans le film.
  public function getAllActeurs() : string {
    $result = "$this, réalisé par $this->realisateur, avec les acteurs suivants :<ul>";
    foreach ($this->castings as $casting) {
      $result .= "<li>".$casting->castingforFilm()."</li>";
    }
    return "$result</ul>";
  }
}