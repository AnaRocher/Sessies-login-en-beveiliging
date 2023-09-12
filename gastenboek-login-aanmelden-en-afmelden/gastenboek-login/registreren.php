<?php 

include('./includes/pdo.php');

$foutmeldingen = [];

if ($_POST) {

    if (empty($_POST['username'])) {
        $foutmeldingen['username'] = 'Je moet een username ingeven.';
    }

    if (empty($_POST['password'])) {
        $foutmeldingen['password'] = 'Je moet een wachtwoord ingeven.';
    } elseif ($_POST['password'] !== $_POST['password_confirmation']) {
        $foutmeldingen['password'] = 'Je ingegeven wachtwoorden moeten overeen komen';
    }

    if (empty($foutmeldingen)) {
        $query = $pdo->prepare('INSERT INTO users (username, password) VALUES (:username, :password)');
        $query->execute([
            'username' => $_POST['username'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
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
    <h1 class="text-center text-4xl mb-8">Registreren</h1>

    <?php include './includes/menu.php' ?>
    
    <form method="post" class="grid gap-4">
        
        <?php include './includes/gebruiker-formulier.php' ?>

        <div>
            <label for="password_confirmation" class="text-gray-500 font-semibold">Geef je wachtwoord nogmaals in</label>
            <div>
                <input value="<?php echo $_POST['password_confirmation'] ?? '' ?>" placeholder="..." id="password_confirmation" type="password" name="password_confirmation"  class="block bg-gray-200 p-2 w-full border border-neutral-400">
            </div>
            <?php if (isset($foutmeldingen['password_confirmation'])): ?>
                <span class="text-red-500 text-sm"><?php echo $foutmeldingen['password_confirmation'] ?></span>
            <?php endif ?>
        </div>

        <div class="flex gap-2 mt-4">
            <input type="submit" value="Registreren" class="flex-1 p-2 bg-green-500 transition hover:bg-green-400 cursor-pointer text-green-100 rounded">
            <a href="index.php" class="bg-orange-500 hover:bg-orange-400 transition text-orange-100 rounded p-2 inline-block">Annuleren</a>
        </div>
    </form>
</div>
    
</body>
</html>