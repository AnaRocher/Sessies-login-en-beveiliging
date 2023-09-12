<?php if (isset($_SESSION['naam'])): ?>
<div>
    Hallo <?php echo $_SESSION['naam'] ?>! Welkom op deze website.
</div>
<?php else: ?>
<div>
    Je hebt nog geen naam ingegeven. <a href="index.php">Geef je naam in.</a>
</div>
<?php endif ?>