<?php

spl_autoload_register(function ($class_name) {
  require 'classes/'. $class_name .'.php';}
);

$genres = [
  $drame = new Genre('Drame'),
  $fantastique = new Genre('Fantastique'),
  $comedie = new Genre('Comédie'),
  $thriller = new Genre('Thriller'),
  $action = new Genre('Action / Aventure'),
  $horreur = new Genre('Horreur'),
  $scifi = new Genre('Science-fiction'),
  $anime = new Genre('Animation'),
  $historique = new Genre('Historique'),
  $docu = new Genre('Documentaire'),
  $comedieRom = new Genre('Comédie romantique'),
  $comedieDra = new Genre('Comédie dramatique'),
];

$réalicateurs = [
  $dLynch = new Realisateur('Lynch','David','Homme','1946-01-20','biographie de Lynch'),
  $sSpielberg = new Realisateur('Spielberg','Steven','Homme','1946-12-18','biographie de Spielberg'),
  $jCameron = new Realisateur('Cameron','James','Homme','1954-08-16','biographie de Cameron'),
  $pJackson = new Realisateur('Jackson','Peter','Homme','1961-10-31','biographie de Jackson'),
  $mBay = new Realisateur('Bay','Michael','Homme','1965-02-17','biographie de Bay'),
];

$acteurs = [
  $kMacLachlan = new Acteur('MacLachlan','Kyle','Homme','1959-02-22','photo'),
  $mOntkean = new Acteur('Ontkean','Michael','Homme','1946-01-24','photo'),
  $mAmick = new Acteur('Amick','Mädchen','Femme','1970-12-12','photo'),
  $vMadsen = new Acteur('Madsen','Virginia','Femme','1961-09-11','photo'),
  $fAnnis = new Acteur('Annis','Francesca','Femme','1945-05-14','photo'),
  $aHopkins = new Acteur('Hopkins','Anthony','Homme','1937-12-31','photo'),
  $jHurt = new Acteur('Hurt','John','Homme','1940-01-22','photo'),
  $aBrancroft = new Acteur('Bancroft','Anne','Femme','1931-09-17','photo'),
  $rScheider = new Acteur('Scheider','Roy','Homme','1932-11-10','photo'),
  $rDreyfuss = new Acteur('Dreyfuss','Richard','Homme','1947-10-29','photo'),
  $rShaw = new Acteur('Shaw','Robert','Homme','1927-08-09','photo'),
  $hThomas = new Acteur('Thomas','Henry','Homme','1971-09-09','photo'),
  $dBarrymore = new Acteur('Barrymore','Drew','Femme','1975-02-22','photo'),
  $sNeill = new Acteur('Neill','Sam','Homme','1947-09-14','photo'),
  $lDern = new Acteur('Dern','Laura','Femme','1967-02-10','photo'),
  $lDiCaprio = new Acteur('DiCaprio','Leonardo','Homme','1974-11-11','photo'),
  $kWinslet = new Acteur('Winslet','Kate','Femme','1975-10-05','photo'),
  $sWorthington = new Acteur('Worthington','Sam','Homme','1976-08-02','photo'),
  $zSaldana = new Acteur('Saldaña','Zoe','Femme','1978-06-19','photo'),
  $sWeaver = new Acteur('Weaver','Sigourney','Femme','1949-10-08','photo'),
  $hSteinfeld = new Acteur('Steinfeld','Hailee','Femme','1996-12-11','photo'),
  $jLendeborgjr = new Acteur('Lendeborg Jr.','Jorge','Homme','1996-01-21','photo'),
  $mFox = new Acteur('Fox','Megan','Femme','1986-05-16','photo'),
  $wArnett = new Acteur('Arnett','Will','Homme','1970-05-04','photo'),

];

$roles = [
  $april = new Role("April O'Neil"),
  $vern = new Role('Vern Fenwick'),
  $charlie = new Role('Charlie'),
  $memo = new Role('Memo'),
  $sully = new Role('Jake Sully'),
  $neytiri = new Role('Neytiri'),
  $grace = new Role('Dr. Grace Augustine'),
  $jack = new Role('Jack Dawson'),
  $rose = new Role('Rose Dewitt Bukater'),
  $brody = new Role('Brody'),
  $quint = new Role('Quint'),
  $hooper = new Role('Hooper'),
  $elliott = new Role('Elliott'),
  $gertie = new Role('Gertie'),
  $grant = new Role('Grant'),
  $ellie = new Role('Ellie'),
  $paul = new Role('Paul Atreides'),
  $daleCooper = new Role('Special Agent Dale Cooper'),
  $sTruman = new Role('Sheriff Harry S. Truman'),
  $shelly = new Role('Shelly Johnson'),
  $frederick = new Role('Dr. Frederick Treves'),
  $merrick = new Role('John Merrick'),
  $kendal = new Role('Mrs. Kendal'),
  $atreides = new Role('Paul Atreides'),
  $irulan = new Role('Princess Irulan'),
  $jessica = new Role('Lady Jessica'),
];

$films = [
  $dune = new Film('Dune', '1984', 155, "L'histoire de Paul Atreides, jeune homme aussi doué que brillant, voué à connaître un destin hors du commun qui le dépasse totalement. Car s'il veut préserver l'avenir de sa famille et de son peuple, il devra se rendre sur la planète la plus dangereuse de l'univers – la seule à même de fournir la ressource la plus précieuse au monde, capable de décupler la puissance de l'humanité. Tandis que des forces maléfiques se disputent le contrôle de cette planète, seuls ceux qui parviennent à dominer leur peur pourront survivre…", $dLynch, $scifi),
  $elephantMan = new Film('Elephant Man','1980', 124,'Londres, 1884. Le chirurgien Frederick Treves découvre un homme complètement défiguré et difforme, devenu une attraction de foire. John Merrick, " le monstre ", doit son nom de Elephant Man au terrible accident que subit sa mère. Alors enceinte de quelques mois, elle est renversée par un éléphant.', $dLynch, $drame),
  $lesDentsDeLaMer = new Film('Les Dents de la mer','1975', 124,"Les Dents de la mer est un thriller américain sorti en 1975 et réalisé par Steven Spielberg. Le film raconte l'histoire de la petite station balnéaire d'Amity, où les habitants sont mis en émoi par la découverte sur le littoral du corps atrocement mutilé d'une jeune vacancière. Pour Martin Brody, le chef de la police, il ne fait aucun doute que la jeune fille a été victime d'un requin", $sSpielberg, $action),
  $et = new Film('E.T.','1982', 115, "E.T., l'extra-terrestre est un film de science-fiction américain réalisé par Steven Spielberg et sorti en 1982. Le film raconte l'histoire d'Elliott, un petit garçon solitaire qui se lie d'amitié avec un extraterrestre abandonné sur Terre. Avec son frère et sa sœur, Elliott va le recueillir puis l'aider à reprendre contact avec ses congénères, tout en essayant de le garder caché de leur mère et du gouvernement américain.", $sSpielberg, $scifi),
  $jurassicPark = new Film("Jurassic Park","1993", 127, "Jurassic Park est un film de science-fiction qui raconte l'histoire de scientifiques qui ont réussi à cloner des animaux préhistoriques sur une île au large du Costa Rica. Le milliardaire John Hammond a financé leur découverte, qui a permis de créer un parc d'attractions peuplé de dinosaures. Les dinosaures ont été clonés à partir d'une goutte de sang absorbée par un moustique fossilisé", $sSpielberg, $action),
  $titanic = new Film("Titanic","1997", 195, "Southampton, 10 avril 1912. Le paquebot le plus grand et le plus moderne du monde, réputé pour son insubmersibilité, le 'Titanic', appareille pour son premier voyage. Quatre jours plus tard, il heurte un iceberg. A son bord, un artiste pauvre et une grande bourgeoise tombent amoureux.", $jCameron, $drame),
  $avatar = new Film("Avatar","2009", 162,"Malgré sa paralysie, Jake Sully, un ancien marine immobilisé dans un fauteuil roulant, est resté un combattant au plus profond de son être. Il est recruté pour se rendre à des années-lumière de la Terre, sur Pandora, où de puissants groupes industriels exploitent un minerai rarissime destiné à résoudre la crise énergétique sur Terre. Parce que l'atmosphère de Pandora est toxique pour les humains, ceux-ci ont créé le Programme Avatar, qui permet à des 'pilotes' humains de lier leur esprit à un avatar, un corps biologique commandé à distance, capable de survivre dans cette atmosphère létale. Ces avatars sont des hybrides créés génétiquement en croisant l'ADN humain avec celui des Na'vi, les autochtones de Pandora.", $jCameron, $scifi),
  $bumblebee = new Film('Bumblebee', "2018", 114, "Alors qu'il est en fuite, l'Autobot Bumblebee trouve refuge dans la décharge d'une petite ville balnéaire de Californie. Il est découvert, brisé et couvert de blessures de guerre, par Charlie, une ado qui approche de ses 18 ans et cherche sa place dans le monde.", $mBay, $action),
  $ninjaturtles = new Film('Ninja Turtles', '2014', 101, "Tenez-vous prêts : quatre héros de légende vont bientôt faire parler d’eux à New York… Leonardo, le leader, Michelangelo, le beau gosse, Raphael, le rebelle et Donatello, le cerveau, vont tout faire pour défendre la ville de New York, prise entre les griffes de Shredder. Entre deux dégustations de pizzas (sans anchois, bien sûr) et un entraînement intense aux arts martiaux, prodigué par leur maître Splinter, ils vont accomplir leur destin, aidés par la courageuse reporter, April O’Neil.", $mBay, $action),
];

$castings = [
  new Casting($ninjaturtles, $mFox, $april),
  new Casting($ninjaturtles, $wArnett, $vern),
  new Casting($bumblebee, $hSteinfeld, $charlie),
  new Casting($bumblebee, $jLendeborgjr, $memo),
  new Casting($titanic, $lDiCaprio, $jack),
  new Casting($titanic, $kWinslet, $rose),
  new Casting($avatar, $sWorthington, $sully),
  new Casting($avatar, $zSaldana, $neytiri),
  new Casting($avatar, $sWeaver, $grace),
  new Casting($et, $hThomas, $elliott),
  new Casting($et, $dBarrymore, $gertie),
  new Casting($jurassicPark, $sNeill, $grant),
  new Casting($jurassicPark, $lDern, $ellie),
  new Casting($elephantMan, $aHopkins, $frederick),
  new Casting($elephantMan, $jHurt, $merrick),
  new Casting($elephantMan, $aBrancroft, $kendal),
  new Casting($lesDentsDeLaMer, $rScheider, $brody),
  new Casting($lesDentsDeLaMer, $rShaw, $quint),
  new Casting($lesDentsDeLaMer, $rDreyfuss, $hooper),
  new Casting($dune, $kMacLachlan, $atreides),
  new Casting($dune, $vMadsen, $irulan),
  new Casting($dune, $fAnnis, $jessica),
];

echo $kMacLachlan->getAllFilms();
echo $elephantMan->getAllActeurs();
echo $april->getActeurs();

foreach($genres as $genre){
  echo ($genre->getfilms()) ? $genre->getFilmsGenre() : "";
}

echo $mBay->filmographie();
// var_dump($avatar->getcastings());
// var_dump($action->getFilms());

// $films :
// Lynch : Dune, Elephant man, 
// Spielberg : Les dents de la mer, ET, Jurrassic park(1993);
// cameron : titanic, avatar
// Bay : Bumblebee, ninja turtles