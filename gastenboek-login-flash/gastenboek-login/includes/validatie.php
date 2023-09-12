<?php

if (empty($_POST['beschrijving'])) {
    $foutmeldingen['beschrijving'] = 'Beschrijving is verplicht in te vullen.';
}