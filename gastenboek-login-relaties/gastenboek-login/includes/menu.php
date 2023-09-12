<u class="flex justify-center gap-4 list-none my-8 text-blue-500">
    <?php if (isset($_SESSION['user'])): ?>
        <li class=""><a href="afmelden.php">Afmelden</a></li>
    <?php else: ?>
        <li class=""><a href="aanmelden.php">Aanmelden</a></li>
        <li class=""><a href="registreren.php">Registreren</a></li>
    <?php endif ?>
</u>