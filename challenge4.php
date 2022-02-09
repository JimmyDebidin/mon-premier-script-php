<?php

$stevensonMovies = [
    'L\'Ile aux trésors' => [' Bobby Driscoll', ' Robert Newton', ' Basil Sydney'],
    'Docteur Jekyll et MR. Hyde' => [' Spencer Tracy', ' Ingrid Bergman', ' Lana Turner'],
    'Le club du suicide' => [' Oleg Dahl', ' Donatas Banionis', ' Igor Dmitriev']
];

foreach ($stevensonMovies as $titleMovie => $listActors){

    echo 'Dans le film' . ' '  . $titleMovie . ' ' . ',les principaux acteurs sont :';

    foreach ($listActors as $actor) {

        echo "$actor,";
   }
   echo '<br>';
}