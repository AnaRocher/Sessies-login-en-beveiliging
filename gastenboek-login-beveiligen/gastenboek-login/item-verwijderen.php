<?php 

include('./includes/pdo.php');

if (!isset($_SESSION['user'])) {
    header('location: aanmelden.php');
    exit;
}

if ($_POST) {
    $query = $pdo->prepare('DELETE FROM gastenboek WHERE id=:id');
    $query->execute([
        'id' => $_GET['id']
    ]);

    header('location:index.php');
    exit;
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

    <p class="text-lg">Ben je zeker dat je dit item wilt verwijderen?</p>
    
    <form method="post" class="">
        <div class="flex gap-2 mt-4">
            <input name="delete" type="submit" value="Verwijderen" class="flex-1 p-2 bg-red-500 transition hover:bg-red-400 cursor-pointer text-red-100 rounded">
            <a href="index.php" class="bg-orange-500 hover:bg-orange-400 transition text-orange-100 rounded p-2 inline-block">Annuleren</a>
        </div>
    </form>
</div>
    
</body>
</html>