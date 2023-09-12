<ul>
    <?php if (isset($_SESSION['naam'])): ?>
    <li><a href="vergeten.php">Naam vergeten</a></li>
    <?php else: ?>
    <li><a href="index.php">Naam ingeven</a></li>
    <?php endif ?>
    <li><a href="pagina1.php">Ga naar pagina 1</a></li>
    <li><a href="pagina2.php">Ga naar pagina 2</a></li>
</ul>