<?php 

include('./includes/pdo.php');

$query = $pdo->query('SELECT gastenboek.*, hotels.id AS hotel_id, hotels.naam AS hotel_naam FROM GASTENBOEK INNER JOIN hotels ON gastenboek.hotel_id=hotels.id');
$entries = $query->fetchAll();

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
    
    <p class="flex justify-center mb-8">
        <a href="item-toevoegen.php" class="bg-green-500 hover:bg-green-400 transition text-green-100 rounded p-2">Nieuw item schrijven</a>
    </p>
    
    <div class="grid gap-4">
        <?php foreach($entries as $entry): ?>
            <article class="bg-gray-200 rounded p-4">
                <h2 class="text-lg font-semibold">
                    <?php echo $entry['naam'] ?>
                </h2>
                <p class="italic text-sm text-gray-500">
                    Verblijf in: <?php echo $entry['hotel_naam'] ?>
                </p>
                <p class="text-sm my-4">
                    <a class="transition bg-orange-500 hover:bg-orange-400 rounded px-2 text-orange-100" href="item-aanpassen.php?id=<?php echo $entry['id'] ?>">aanpassen</a>
                    <a class="transition bg-red-500 hover:bg-red-400 rounded px-2 text-red-100" href="item-verwijderen.php?id=<?php echo $entry['id'] ?>">verwijderen</a>
                </p>
                <div class="my-4">
                    <?php echo $entry['beschrijving'] ?>
                </div>
                <p class="text-gray-500">
                    Score:
                    <span class="text-yellow-400">
                        <?php echo str_repeat("★", $entry['score']) ?><?php echo str_repeat("☆", 5 - $entry['score']) ?>
                    </span>
                </p>
                <p class="text-gray-400 text-sm">
                    Geschreven op <?php echo $entry['aangemaakt_op'] ?>
                </p>
            </article>
        <?php endforeach ?>
    </div>
</div>
    
</body>
</html>