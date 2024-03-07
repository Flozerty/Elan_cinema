<?php

spl_autoload_register(function ($class_name) {
  require 'classes/'. $class_name .'.php';}
);

$genres = [
  new Genre('Drame'),
  new Genre('Fantastique'),
  new Genre('Comédie'),
  new Genre('Thriller'),
  new Genre('Action / Aventure'),
  new Genre('Horreur'),
  new Genre('Science-fiction'),
  new Genre('Animation'),
  new Genre('Historique'),
  new Genre('Documentaire'),
  new Genre('Comédie romantique'),
  new Genre('Comédie dramatique'),
];

$réalicateurs = [
  new Realisateur('Lynch','David','Homme','1946-01-20','biographie de Lynch'),
  new Realisateur('Spielberg','Steven','Homme','1946-12-18','biographie de Spielberg'),
  new Realisateur('Cameron','James','Homme','1954-08-16','biographie de Cameron'),
  new Realisateur('Jackson','Peter','Homme','1961-10-31','biographie de Jackson'),
  new Realisateur('Bay','Michael','Homme','1965-02-17','biographie de Bay'),
];

$acteurs = [
  new Acteur('MacLachlan','Kyle','Homme','1959-02-22','photo'),
  new Acteur('Ontkean','Michael','Homme','1946-01-24','photo'),
  new Acteur('Amick','Mädchen','Femme','1970-12-12','photo'),
  new Acteur('Young','Sean','Femme','1959-11-20','photo'),
  new Acteur('Prochnow','Jürgen','Homme', '1941-06-10', 'photo'),
  new Acteur('Hopkins','Anthony','Homme','1937-12-31','photo'),
  new Acteur('Hurt','John','Homme','1940-01-22','photo'),
  new Acteur('Bancroft','Anne','Femme','1931-09-17','photo'),
  new Acteur('Scheider','Roy','Homme','1932-11-10','photo'),
  new Acteur('Dreyfuss','Richard','Homme','1947-10-29','photo'),
  new Acteur('Shaw','Robert','Homme','1927-08-09','photo'),

];

$films = '
Lynch : Dune, Twin Peaks, Elephant man, 
Spielberg : Les dents de la mer, -ET, -Jurrassic park';