<?php

// Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere

$users = [
  ['name' => 'Davide','surname' => 'Cariola', 'gender' => 'NB'],
  ['name' => 'Mattia','surname' => 'Rossi', 'gender' => 'M'],
  ['name' => 'Giovanna','surname' => 'Verdi', 'gender' => 'F'],

];

foreach ($users as $user) {
  if ($user['gender'] == 'M') {
     echo "Buongiorno Sig." . $user['name'] . " " . $user['surname'] . "\n";
  }elseif ($user['gender']  =='F') {
     echo "Buongiorno Sign." . $user['name'] . " " . $user['surname'] . "\n";
  }else {
    echo "Buongiorno" . $user['name'] . " " . $user['surname'] . "\n";
  }
}
