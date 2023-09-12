<?php 

include('./includes/pdo.php');

$query = $pdo->query('SELECT * FROM hotels');
$hotels = $query->fetchAll();

$foutmeldingen = [];

if ($_POST) {
    include('./includes/validatie.php');

    if (empty($foutmeldingen)) {
        $query = $pdo->prepare('INSERT INTO gastenboek (naam, beschrijving, hotel_id, score) VALUES (:naam, :beschrijving, :hotel_id, :score)');
        $query->execute([
            'naam' => $_POST['naam'],
            'beschrijving' => $_POST['beschrijving'],
            'hotel_id' => $_POST['hotel_id'],
            'score' => $_POST['score']
        ]);

        header('location: index.php');
        exit;
    }
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gastenboek</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-neutral-800">

<div class="max-w-md mx-auto bg-gray-100 mt-8 rounded p-4 shadow-lg">
    <h1 class="text-center text-4xl mb-8">Gastenboek</h1>

    <?php include './includes/menu.php' ?>
    
    <form method="post" class="grid gap-4">
        <?php include('./includes/formulier.php') ?>
        <div class="flex gap-2 mt-4">
            <input type="submit" value="Verzenden" class="flex-1 p-2 bg-green-500 transition hover:bg-green-400 cursor-pointer text-green-100 rounded">
            <a href="index.php" class="bg-orange-500 hover:bg-orange-400 transition text-orange-100 rounded p-2 inline-block">Annuleren</a>
        </div>
    </form>
</div>
    
</body>
</html>