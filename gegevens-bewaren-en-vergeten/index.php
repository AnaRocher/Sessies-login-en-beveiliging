<?php 

include './includes/init.php';


$foutmeldingen = [];

if ($_POST) {
    if (empty($_POST['naam'])) {
        $foutmeldingen['naam'] = 'Naam is verplicht';
    }

    if (empty($foutmeldingen)) {
        $_SESSION['naam'] = $_POST['naam'];
        header('location: pagina1.php');
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
    <title>Geef je naam in</title>
    <style>
    .error {
        color: red;
    }
    </style>
</head>

<body>

    <form method="post">
        <div>
            <label for="naam">Naam:</label>
            <input class="<?php echo isset($foutmeldingen['naam']) ? 'error' : '' ?>" type="text" name="naam">
            <input type="submit" value="Bewaren">
        </div>
    </form>

    <?php include './includes/menu.php'; ?>

</body>

</html>