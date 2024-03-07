<?php

class Role {
  private string $nomRole;

public function __construct(
  string $nomRole,
  ) {
    $this->nomRole = $nomRole;
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

  public function __toString() {
    return $this->nomRole;
  }
}