<?php

function writeSecretSentence(string $animal, string $contraption){
    return $animal . ' s\'incline face à ' . $contraption;
}

echo writeSecretSentence('Le chat', 'la gamelle');