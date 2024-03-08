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

    //Ajout du casting dans le tableau de castings de l'acteur, du film, et du role associés.

    $this->film->addCasting($this);
    $this->acteur->addCasting($this);
    $this->role->addCasting($this);
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
    return "$this->acteur a joué $this->role dans $this->film";
  }

  // Réponses personnalisées quand on appelle le casting de l'acteur / films ou role
  public function castingForActeur() :string {
    return "$this->role dans $this->film";
  }
  public function castingForFilm() :string {
    return "$this->acteur dans le rôle de $this->role";
  }
  public function castingForRole() :string {
    return "$this->acteur dans $this->film";
  }
}