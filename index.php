<?php

spl_autoload_register(function ($class_name) {
  require 'classes/'. $class_name .'.php';}
);

var_dump(new Realisateur("nom","prenom", "sexe", "1999-01-01", "bio"));