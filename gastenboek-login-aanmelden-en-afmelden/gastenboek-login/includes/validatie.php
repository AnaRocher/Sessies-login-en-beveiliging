<?php

if (empty($_POST['naam'])) {
    $foutmeldingen['naam'] = 'Naam is verplicht in te vullen.';
}

if (empty($_POST['beschrijving'])) {
    $foutmeldingen['beschrijving'] = 'Beschrijving is verplicht in te vullen.';
}