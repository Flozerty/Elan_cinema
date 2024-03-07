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
  
}