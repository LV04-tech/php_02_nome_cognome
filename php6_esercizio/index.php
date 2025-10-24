<?php
// Scrivere un programma che stampi in console tutti i numeri da uno a cento.
// Se il numero è multiplo di 3 stampare “PHP” al posto del numero;
// se multiplo di 5 stampare “JAVASCRIPT”;
// se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".

for ($i=0 ; $i < 100  ; $i++ ) { 
  switch ($i) {
    case $i % 15 == 0:
      echo "HACKADEMY";
      case $i % 3 == 0:
        echo "PHP \n";
        break;
        case $i % 5 == 0:
          echo "JAVASCRIPT";
          break;
          default:
          echo "$i \n";
          break;
        }
      }