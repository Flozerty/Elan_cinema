<?php

class Casting {
  private Film $film;
  private Acteur $acteur;
  private Role $role;

  public function __construct(
    Film $film, 
    Acteur $acteur, 
    Role $role,
  ) {
    $this->film = $film;
    $this->acteur = $acteur;
    $this->role = $role;
  }
 //////////GETTERS & SETTERS//////////////

  public function getFilm() : Film
  {
    return $this->film;
  }
  public function setFilm($film)
  {
    $this->film = $film;
  }
  public function getActeur() : Acteur
  {
    return $this->acteur;
  }
  public function setActeur($acteur)
  {
    $this->acteur = $acteur;
  }
  public function getRole() : Role
  {
    return $this->role;
  }
  public function setRole($role)
  {
    $this->role = $role;
  }

  public function __toString() {
    return "Castin de $this->film";
  }
}