<?php
$servername = "localhost";
$username = "root";
$password = "lazyftw";
$db = "image";
$table = "membres";

try {
     $connexion = new PDO('mysql:host='.$servername.';dbname='.$db, $username, $password);
     $connexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
     $sql ="CREATE TABLE $table (

  id               int(10) unsigned NOT NULL AUTO_INCREMENT,
  nom_utilisateur  varchar(32)  NOT NULL,
  mot_de_passe     char(40)     NOT NULL,
  adresse_email    varchar(128) NOT NULL,
  hash_validation  char(32)     NOT NULL,
  date_inscription date NOT     NULL,
  avatar           varchar(128) NOT NULL DEFAULT '',

  PRIMARY KEY (id),
  UNIQUE KEY nom_utilisateur (nom_utilisateur),
  UNIQUE KEY adresse_email (adresse_email),
  KEY mot_de_passe (mot_de_passe)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";

    $connexion->exec($sql);
    print("Created $$table Table.\n");

} catch(PDOException $e) {
    echo $e->getMessage();

    header ("Location: index.php");
}
?>
