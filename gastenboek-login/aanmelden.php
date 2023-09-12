<?php 

include('./includes/pdo.php');

$foutmeldingen = [];

if ($_POST) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $foutmeldingen['username'] = "Username en Wachtwoord is verplicht in te vullen";
    }

    if (empty($foutmeldingen)) {
        $query = $pdo->prepare('SELECT * FROM gastenboek_login WHERE username=: LIMIT 1');
        $query->execute(['username' => $_POST['username']]);
        $user = $query->fetch();

        if ($user && password_verify($_POST['password'], $user['password'])) {

        } else {
            $foutmeldingen['username'] = "We kunnen je niet aanmelden met deze gegevens";
        }

        header('location: index.php');
        exit;
    }
}

?>
<!DOCTYPE html>
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
        <h1 class="text-center text-4xl mb-8">Aanmelden</h1>

        <?php include './includes/menu.php' ?>

        <form method="post" class="grid gap-4">

            <?php include './includes/gebruiker-formulier.php' ?>

            <div class="flex gap-2 mt-4">
                <input type="submit" value="Aanmelden"
                    class="flex-1 p-2 bg-green-500 transition hover:bg-green-400 cursor-pointer text-green-100 rounded">
                <a href="index.php"
                    class="bg-orange-500 hover:bg-orange-400 transition text-orange-100 rounded p-2 inline-block">Annuleren</a>
            </div>
        </form>
    </div>

</body>

</html>