<?php

// <!-- Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array  -->

  $numbers =[1,2,3,4,5,6,7,8,9,10];

  $counter =0;
  $total =0;

  foreach ($numbers as $number) {
    if($number %2 ==0){
      $total += $number;
      $counter++;
    }
  }

  echo $total/$counter;
  