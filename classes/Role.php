<?php

class Role {
  private string $nomRole;
  private array $castings;

public function __construct(
    string $nomRole,
  ) {
    $this->nomRole = $nomRole;
    $this->castings = [];
  }

  //////////GETTERS & SETTERS//////////////
  
  public function getNomRole() : string 
  {
    return $this->nomRole;
  }
  public function setNomRole($nomRole)
  {
    $this->nomRole = $nomRole;
  }
  public function getCastings() : array
  {
    return $this->castings;
  }
  public function setCastings($castings)
  {
    $this->castings = $castings;
  }
  /////////////////////////////////////////
  public function __toString() {
    return $this->nomRole;
  }

  public function addCasting(Casting $casting) {
    $this->castings[] = $casting;
  }

  // renvoie la liste des acteurs ayant joué ce rôle dans un film.
  public function getActeurs() : string {
    $result = "Le rôle de $this a été joué par :<ul>";
    foreach ($this->castings as $casting) {
      $result .= "<li>".$casting->getActeur()." dans ".$casting->getFilm()."</li>";
    }
    return "$result</ul>";
  }
}