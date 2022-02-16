<?php

$bookStevenson['L\'Île au trésor'] = '1883';
$bookStevenson['Enlevé !'] = '1886';
$bookStevenson['Jardin de poèmes enfantins'] = '1885';

asort($bookStevenson);

foreach ($bookStevenson as $title => $release)
{
    echo $title . ' ' . $release . '<br>';
}

