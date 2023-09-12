<ul class="flex justify-center gap-4 list-none my-8 text-blue-500">
    <?php if (isset($_SESSION['user'])): ?>
    <li class=""><a href="afmelden.php">Afmelden</a></li>
    <?php else: ?>
    <li class=""><a href="aanmelden.php">Aanmelden</a></li>
    <li class=""><a href="registreren.php">Registreren</a></li>
    <?php endif ?>
</ul>

<?php if(isset($_SESSION['alert'])): ?>
<div class="bg-neutral-300 text-black text-center p-4 my-4 rounded">
    <?php echo $_SESSION['alert']; ?>
</div>
<?php unset($_SESSION['alert']) ?>
<?php endif ?>